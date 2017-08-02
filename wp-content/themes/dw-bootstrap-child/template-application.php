<?php
/*
* Template Name: Tenant Application
*/
?>
<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="agora-application container-fluid">
  <div class="row row-eq-height">
    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 red-bg">
      <div class="left-content white">
        <p>Agora has many properties in its current portfolio with opportunities for renting space.</p>
      </div>
    </div>
    <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9 tan-bg">
      <div class="right-content">
        <p>Please refer to the <a href="#">Properties page</a> with more detailed descriptions of the projects and available spaces.  If you already know which space you would like to rent, please fill out and submit the Tenant Application form below.</p>
        <span class="application-title text-uppercase">Tenant Application</span>

        <div class="container-fluid">
	        <div class="row">
        	  <form role="form">

                <div class="form-group col-xs-12 col-sm-5 col-md-5 col-lg-5 no-padding">
                  <span class="form-header text-uppercase red">Personal information</span><br/>
                    <label for="presentAddressLength">How long at present address?</label>
                    <input type="text" class="form-control" id="presentAddressLength">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1">
                </div>
                <div class="form-group col-xs-12 col-sm-7 col-md-7 col-lg-7" style="padding-left: 72px">
                  <label>
                      <input type="checkbox"> Single<br/>
                      <input type="checkbox"> Married<br/>
                      <input type="checkbox"> Own/Buying Home<br/>
                      <input type="checkbox"> Rent<br/>
                      <input type="checkbox"> Live with Parents<br/>
                      <input type="checkbox"> Live with Relatives<br/>
                  </label>
                </div>

                <div class="clearfix"></div>
                <hr>
                <div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6 no-padding">
                  <span class="form-header text-uppercase red">Applicant</span><br/>
                    <label for="inputName1">Name</label>
                    <input type="text" class="form-control" id="inputName1">

                    <label for="inputAddress1">Home Address</label>
                    <input type="text" class="form-control" id="inputAddress1">

                    <label for="inputCityState1">City/State/Zip</label>
                    <input type="text" class="form-control" id="inputCityState1">

                    <label for="inputHomeTelephone1">Home Telephone</label>
                    <input type="text" class="form-control" id="inputHomeTelephone1">

                    <label for="inputBusinessTelephone1">Business Telephone</label>
                    <input type="text" class="form-control" id="inputBusinessTelephone1">

                    <label for="inputSocialSecurity1">Social Security</label>
                    <input type="text" class="form-control" id="inputSocialSecurity1">

                    <label for="inputDriversLicense1">Driver's License Number</label>
                    <input type="text" class="form-control" id="inputDriversLicense1">

                    <label for="inputMothersMaidenName1">Mother's Maiden Name</label>
                    <input type="text" class="form-control" id="inputMothersMaidenName1">

                    <label for="inputBirthDate1">Birth date</label>
                    <input type="text" class="form-control" id="inputBirthDate1">

                    <label for="inputBankruptcy1">Have you ever filed for Bankruptcy</label>
                    <input type="text" class="form-control" id="inputBankruptcy1">

                    <label for="inputUSCitizen1">Are you a U.S. Citizen?</label>
                    <input type="text" class="form-control" id="inputUSCitizen1">
                </div>

                <div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6" style="padding-left: 30px">
                  <span class="form-header text-uppercase red">Spouse's Applicant</span><br/>
                  <label for="inputName2">Name</label>
                  <input type="text" class="form-control" id="inputName2">

                  <label for="inputAddress2">Home Address</label>
                  <input type="text" class="form-control" id="inputAddress2">

                  <label for="inputCityState2">City/State/Zip</label>
                  <input type="text" class="form-control" id="inputCityState2">

                  <label for="inputHomeTelephone2">Home Telephone</label>
                  <input type="text" class="form-control" id="inputHomeTelephone2">

                  <label for="inputBusinessTelephone2">Business Telephone</label>
                  <input type="text" class="form-control" id="inputBusinessTelephone2">

                  <label for="inputSocialSecurity2">Social Security</label>
                  <input type="text" class="form-control" id="inputSocialSecurity2">

                  <label for="inputDriversLicense2">Driver's License Number</label>
                  <input type="text" class="form-control" id="inputDriversLicense2">

                  <label for="inputMothersMaidenName2">Mother's Maiden Name</label>
                  <input type="text" class="form-control" id="inputMothersMaidenName2">

                  <label for="inputBirthDate2">Birth date</label>
                  <input type="text" class="form-control" id="inputBirthDate2">

                  <label for="inputBankruptcy2">Have you ever filed for Bankruptcy</label>
                  <input type="text" class="form-control" id="inputBankruptcy2">

                  <label for="inputUSCitizen2">Are you a U.S. Citizen?</label>
                  <input type="text" class="form-control" id="inputUSCitizen2">
                </div>
                <div class="clearfix"></div>

                <div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6 no-padding">
                  <span class="form-header text-uppercase">Educational Background</span><br/>
                    <label for="inputHighSchool1">High School</label>
                    <input type="text" class="form-control" id="inputHighSchool1">

                    <label for="inputGradeCompleted1">Last Grade Completed</label>
                    <input type="text" class="form-control" id="inputGradeCompleted1">

                    <label for="inputCollege1">College/University</label>
                    <input type="text" class="form-control" id="inputCollege1">

                    <label for="inputMajor1">Major</label>
                    <input type="text" class="form-control" id="inputMajor1">

                    <label for="inputDegreeYear1">Degree Received &amp; Year</label>
                    <input type="text" class="form-control" id="inputDegreeYear1">

                </div>

                <div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6" style="padding-left: 30px">
                  <span class="form-header text-uppercase">Educational Background</span><br/>
                    <label for="inputHighSchool2">High School</label>
                    <input type="text" class="form-control" id="inputHighSchool2">

                    <label for="inputGradeCompleted2">Last Grade Completed</label>
                    <input type="text" class="form-control" id="inputGradeCompleted2">

                    <label for="inputCollege2">College/University</label>
                    <input type="text" class="form-control" id="inputCollege2">

                    <label for="inputMajor2">Major</label>
                    <input type="text" class="form-control" id="inputMajor2">

                    <label for="inputDegreeYear2">Degree Received &amp; Year</label>
                    <input type="text" class="form-control" id="inputDegreeYear2">
                </div>
                <div class="clearfix"></div>


                <div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6 no-padding">
                  <span class="form-header text-uppercase">Employment/Business Data</span><br/>
                    <label for="inputCurrentEmployer1">Current Employer</label>
                    <input type="text" class="form-control" id="inputCurrentEmployer1">

                    <label for="inputCurrentBusinessAddress1">Address</label>
                    <input type="text" class="form-control" id="inputCurrentBusinessAddress1">

                    <label for="inputCurrentBusinessCityState1">City/State/Zip</label>
                    <input type="text" class="form-control" id="inputCurrentBusinessCityState1">

                    <label for="inputCurrentPosition1">Position</label>
                    <input type="text" class="form-control" id="inputCurrentPosition1">

                    <label for="inputCurrentIncome1">Present Salary (Gross Monthly)</label>
                    <input type="text" class="form-control" id="inputCurrentIncome1">

                    <label for="inputCurrentWorkPeriod1">Started year to end year</label>
                    <input type="text" class="form-control" id="inputCurrentWorkPeriod1">

                    <label for="inputCurrentWorkDescription1">Description of Work</label>
                    <input type="text" class="form-control" id="inputCurrentWorkDescription1">

                    <label for="inputPreviousEmployer1">Previous Employer</label>
                    <input type="text" class="form-control" id="inputPreviousEmployer1">

                    <label for="inputPreviousBusinessAddress1">Address</label>
                    <input type="text" class="form-control" id="inputPreviousBusinessAddress1">

                    <label for="inputPreviousBusinessCityState1">City/State/Zip</label>
                    <input type="text" class="form-control" id="inputPreviousBusinessCityState1">

                    <label for="inputPreviousPosition1">Position</label>
                    <input type="text" class="form-control" id="inputPreviousPosition1">

                    <label for="inputPreviousIncome1">Present Salary (Gross Monthly)</label>
                    <input type="text" class="form-control" id="inputPreviousIncome1">

                    <label for="inputPreviousWorkPeriod1">Started year to end year</label>
                    <input type="text" class="form-control" id="inputPreviousWorkPeriod1">

                    <label for="inputPreviousWorkDescription1">Description of Work</label>
                    <input type="text" class="form-control" id="inputPreviousWorkDescription1">
                </div>

                <div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6" style="padding-left: 30px">
                  <span class="form-header text-uppercase">Employment/Business Data</span><br/>
                    <label for="inputCurrentEmployer2">Current Employer</label>
                    <input type="text" class="form-control" id="inputCurrentEmployer2">

                    <label for="inputCurrentBusinessAddress2">Address</label>
                    <input type="text" class="form-control" id="inputCurrentBusinessAddress2">

                    <label for="inputCurrentBusinessCityState2">City/State/Zip</label>
                    <input type="text" class="form-control" id="inputCurrentBusinessCityState2">

                    <label for="inputCurrentPosition2">Position</label>
                    <input type="text" class="form-control" id="inputCurrentPosition2">

                    <label for="inputCurrentIncome2">Present Salary (Gross Monthly)</label>
                    <input type="text" class="form-control" id="inputCurrentIncome2">

                    <label for="inputCurrentWorkPeriod2">Started year to end year</label>
                    <input type="text" class="form-control" id="inputCurrentWorkPeriod2">

                    <label for="inputCurrentWorkDescription2">Description of Work</label>
                    <input type="text" class="form-control" id="inputCurrentWorkDescription2">

                    <label for="inputPreviousEmployer2">Previous Employer</label>
                    <input type="text" class="form-control" id="inputPreviousEmployer2">

                    <label for="inputPreviousBusinessAddress2">Address</label>
                    <input type="text" class="form-control" id="inputPreviousBusinessAddress2">

                    <label for="inputPreviousBusinessCityState2">City/State/Zip</label>
                    <input type="text" class="form-control" id="inputPreviousBusinessCityState2">

                    <label for="inputPreviousPosition2">Position</label>
                    <input type="text" class="form-control" id="inputPreviousPosition2">

                    <label for="inputPreviousIncome2">Present Salary (Gross Monthly)</label>
                    <input type="text" class="form-control" id="inputPreviousIncome2">

                    <label for="inputPreviousWorkPeriod2">Started year to end year</label>
                    <input type="text" class="form-control" id="inputPreviousWorkPeriod2">

                    <label for="inputPreviousWorkDescription2">Description of Work</label>
                    <input type="text" class="form-control" id="inputPreviousWorkDescription2">
                </div>

                <div class="clearfix"></div>
                <hr>


                <span class="form-header text-uppercase red">Previous Business Owner</span><br/>
                <p>Have you ever owned your own business? If so, give the following details:</p>
                <div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6 no-padding">

                    <label for="inputPreviousBusinessOwnerName">Business Name</label>
                    <input type="text" class="form-control" id="inputPreviousBusinessOwnerName">

                    <label for="inputPreviousBusinessOwnerType">Type of business</label>
                    <input type="text" class="form-control" id="inputPreviousBusinessOwnerType">

                    <label for="inputPreviousBusinessOwnerAddress1">Address</label>
                    <input type="text" class="form-control" id="inputPreviousBusinessOwnerAddress1">

                    <label for="inputPreviousBusinessOwnerCityState1">City/State/Zip</label>
                    <input type="text" class="form-control" id="inputPreviousBusinessOwnerCityState1">
                </div>

                <div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6" style="padding-left: 30px">

                    <label for="inputOwnedLength">How long owned?</label>
                    <input type="text" class="form-control" id="inputOwnedLength">

                    <label for="inputEmployeeTotal1">How many employees?</label>
                    <input type="text" class="form-control" id="inputEmployeeTotal1">

                    <label for="inputPreviousBusinessOwnerAddress2">Address</label>
                    <input type="text" class="form-control" id="inputPreviousBusinessOwnerAddress2">

                    <label for="inputPreviousBusinessOwnerCityState2">City/State/Zip</label>
                    <input type="text" class="form-control" id="inputPreviousBusinessOwnerCityState2">

                </div>

                <p>Describe how the business changed over the time you owned it:</p>

                <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12 no-padding">
                  <textarea class="form-control" id="businessDescription" rows="3"></textarea>
                </div>

            </form>
            <div class="clearfix"></div>

          	</div>
          </div>













      </div> <!-- End right-content -->
    </div>

  </div>
</div>


<?php endwhile; else : ?>
    <div class="container-fluid">
        <div class="row row-eq-height">
            <div class="col-lg-12">
              <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
            </div>
        </div>
    </div>
<?php endif; ?>


<?php get_footer(); ?>
