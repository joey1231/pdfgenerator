<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once dirname(__FILE__) . '/tcpdf/tcpdf.php';

class Pdf extends TCPDF {


    public $company = null;
    public $ref_number = 0;
    public $trans_number = 0;
    public $fspr_number = 0;

    function __construct($company)
    {
        parent::__construct();

        $this->SetCreator(PDF_CREATOR);
		    $this->SetAuthor('Doc Generator');

        // set margins
    		$this->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP/2, PDF_MARGIN_RIGHT);
        $this->setPageOrientation('P', true, 10);
        $this->SetFont('dejavusans', '', 8); // set the font

        $this->setHeaderMargin(PDF_MARGIN_HEADER);
        $this->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM-10);

        $this->SetPrintHeader(false);
        $this->SetPrintFooter(true);

        $this->setFontSubsetting(false);

        $this->company = $company['company'];
        $this->fspr_number = $company['fspr'];
        $this->trans = null;
        $this->docref = null;
    }

    public function getCompany(){ return $this->company; }
    public function setCompany($s){
        $this->company = $s;
    }


    //Page header
    public function Header() {

      if ($this->company == 2){
          // Add up with logo
          $image = base_url()."resource/1/letterhead.png";
          $this->Image($image, 10, 4, 189, 0, 'PNG', '', 'T', false, 300, '', false, false, 0, false, false, false);

          // Add up the date stamp
          $this->SetFont('helvetica', 'N', 8);
          $this->Cell(0, 15, date("Y/m/d"), 0, false, 'C', 0, '', 0, false, 'M', 'M');

          $this->setY(45);
      } else if ($this->company == 3){
          // Just the logo
          $image = base_url()."resource/2/letterhead.png";
          $this->Image($image, 125, 4, 0, 23, 'PNG', '', 'T', false, 300, '', false, false, 0, false, false, false);
      }


    }

    // Page footer
    public function Footer() {

        // Position at 15 mm from bottom
        $this->SetY(-12);
        // Set font
        $this->SetFont('helvetica', 'N', 8);

        $currentNumber = $this->getNumPages();
        if ($currentNumber == "1" or $currentNumber == 1){
        } else {
          // Page number
          $currentNumber--;
          $text = "Page ".($currentNumber);
          $text = $text . " | ".$this->company->firm_name;

          if ($this->company->idfirm == 3){
            $text = $text . " | Company No: 3069025 | FSP No: ".$this->fspr_number;
          } else if ($this->company->idfirm == 2){
            $text = $text . " | Company No: 5898228 | FSP No: ".$this->fspr_number;
          }


          $this->Cell(0, 10, $text , 0, false, 'R', 0, '', 0, false, 'T', 'M');
        }


    }

}

?>
