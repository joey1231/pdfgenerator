<h1 style="font-size:260%;color:#0E7EC0">Client Summary</h1>
<hr />
<br />
<p style="font-size:120%"><i>Below is a summary of your current situation:</i></p>
<?php
  $situations = array(
    'Gavin is the primary income earner although Korina does have a teaching occupation that brings in about $20,000 pa.  The couple have paid off all major loan debts including Korinas\' student debt.',
    'Gavin and Korina own their house freehold.  They have three lovely children at various ages.',
   	'Clients are in a strong financial position since they own their house outright, having a strong asset base with have a good sum of money invested.',
   	'Both clients have a Will in place and have recently in the last few years put in place a Power of Attorney.',
   	'Clients are operating under a Partnership structure but do have a company incorporated.',
   	'Clients currently have insurance in place but are needing a review since it has been may years since the inception of the insurance and there has been change to their personal and financial circumstances including a occupation/business change focus.',
   	'Mortgage Repayment Cover is recommended as opposed to their existing Rural Income Cover as the Mortgage Repayment Cover has no ACC off-sets.  This is being topped up with an Income Protection product to reach required insurance coverage amount.',
   	'The Total Permanent Disability cover wordings is at present "Any Occupation" however with the change in occupation/business focus, the client is still only able to achieve this policy wording',
   	'Both clients policies has Trauma cover in place with Life Cover buyback, however has no Trauma re-instatement and this is suggested to be implemented',
   	'Both clients insurance policies have no Waiver of premium and this is recommended in the new policy',
   	'Gavin is now a Owner Operated Courier operator and though clients do have some land and cattle, I have suggested that they look into the policy wordings of their Rural Income Protection policy as to the definition of "farming" as the Termination and Reinstatement clauses state that "if the life insured ceases Farming for more than three consecutive months ...then this Insurance Component will automatically lapse without the need for notice to you" - the Mortgage Repayment Cover along with the Income Protection cover will tidy up this concern nicely to reflect the changes in primary occupation/business.',
   	'Mortgage Repayment cover is recommended as opposed to current Rural Income protection plan as they have the ability to have a longer payment period'

  );
?>
<ul style="font-size:120%">
  <?php foreach($situations as $s): ?>
    <li><?php echo $s; ?></li>
  <?php endforeach; ?>
</ul>
