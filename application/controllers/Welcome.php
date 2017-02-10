<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		date_default_timezone_set('Pacific/Auckland');
		$this->load->view('welcome_message');

		error_reporting(0);
	}

	public function testa(){
			$this->load->helper('file');

			// Transaction name!
			$client_number = 00001; // This must be from db
			$client_number = strtotime(date("Y-m-d H:i:s A"));

			$last_name  = str_replace(" ", "", "Bandiola");
			$first_name = str_replace(" ", "", "Kieth Mark");

			$package_name = $client_number."_".$last_name."_".$first_name;
			echo $package_name;

			// Create a folder first!
			$folder = "resource/packages/".$package_name;
			if (!is_dir($folder)){
					mkdir($folder, 0777);

					// Copy existing files...


					// Copy the templates....
					$company = 1;
					if ($company == 1){
							$acc_file = file_get_contents("resource/atp_jdlife_template.pdf");
					} else if ($company == 2){
							$acc_file = file_get_contents("resource/atp_eliteinsure_template.pdf");
					}

					if ($acc_file == false or $acc_file == null){
						echo "Could not read the template file!";
					} else {

						$acc_final_file = $folder."/".$package_name."_ACC.pdf";
						if (! write_file($acc_final_file, $acc_file)){
								echo "Unable to write the file!";
						} else {
								// File written!
						}

						// Zip the files!
						// Double check if this exists on the server!
						$zip = new ZipArchive();
						$zip_file = "resource/packages/".$package_name.".zip";

						if ($zip->open($zip_file, ZipArchive::CREATE)!==TRUE) {
						    exit("cannot open <$zip_file>\n");
						} else {
								echo "Should have the zip file now!<br>";

								$zip->addFile($acc_final_file, $package_name."/".$package_name."_ACC.pdf");
						}

						$zip->close();

						//	Remove the folder.
						delete_files($folder, true);
						rmdir($folder);

					}





			} else {
					// Permission denied or file already exists!
			}




	}


}
