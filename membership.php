<!DOCTYPE html>
<html lang="en">
<style>
    .border-class {
        border: 0.5px thin black solid;
        margin: 20px;
        padding: 20px;
    }

    .radius-30 {
        border-radius: 30px;
    }
</style>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />

</head>

<body>
    <div class="container">
        <form class="border-class card p-5" action="javascript:void(0)" method="POST">
            <div class="container-fluid">
                <h4 class="display-6 fw-bold text-center text-success">
                    Apply for Membership
            </div>

            <label for="name" class="col-10 offset-1 form-label  mt-2">Name </label>
            <input type="text" class="form-control col-10 offset-1     mt-0" style="border-radius:30px;" required placeholder="Enter Name" name="name" id="name" value="" />
            <label for="name" class="col-10 offset-1 form-label mt-2 "> Father Name </label>
            <input type="text" class="form-control mt-2 col-10 offset-1  mt-0 " style="border-radius:30px;" required placeholder="Enter fatherName" name="fatherName" id="fatherName" value="" />
            <label for="name" class="col-10 offset-1 form-label  mt-2"> Husband Name </label>
            <input type="text" class="form-control mt-2 col-10 offset-1  mt-0" style="border-radius:30px;" required placeholder="Enter husbandName" name="husbandName" id="husbandName" value="" />
            <label for="name" class="col-10 offset-1 form-label  mt-2"> Gender </label>
            <select name="gender" id="gender" style="border-radius:30px;" class="form-control mt-2 col-10 offset-1" required>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>
            <label for="date" class="col-10 offset-1 form-label  mt-2 "> Date Of Birth</label>
            <input type="date" class="form-control mt-2 col-10 offset-1 mt-0" style="border-radius:30px;" required placeholder="Enter dob" name="dob" id="dob" value="" />

            <label for="name" class="col-10 offset-1 form-label   mt-2 "> Educational Qualification</label>
            <input type="text" class="form-control mt-2 col-10 offset-1 mt-0" style="border-radius:30px;" required placeholder="Enter Educational Qualification" name="educationalQualification" id="educationalQualification" value="" />

            <label for="name" class="col-10 offset-1 form-label    mt-2 "> Educational Instituition</label>
            <input type="text" class="form-control mt-2 col-10 offset-1" style="border-radius:30px;" required placeholder="Enter Name Of Educational Institution" name="nameOfEducationalInstitution" id="nameOfEducationalInstitution" value="" />
            <label for="name" class="col-10 offset-1 form-label     mt-2 "> Proffession</label>
            <input type="text" class="form-control mt-2 col-10 offset-1" style="border-radius:30px;" required placeholder="Enter Profession" name="profession" id="profession" value="" />
            <label for="name" class="col-10 offset-1 form-label   mt-2 "> Designation</label>
            <input type="text" class="form-control mt-2 col-10 offset-1" style="border-radius:30px;" required placeholder="Enter designation" name="designation" id="designation" value="" />
            <label for="name" class="col-10 offset-1 form-label   mt-2 "> Postal Address</label>
            <input type="text" class="form-control mt-2 col-10 offset-1" style="border-radius:30px;" required placeholder="Enter postalAddress" name="postalAddress" id="postalAddress" value="" />
            <label for="name" class="col-10 offset-1 form-label   mt-2 "> Union Council No</label>
            <input type="number" class="form-control mt-2 col-10 offset-1" style="border-radius:30px;" required placeholder="Enter unionCouncilNo" name="unionCouncilNo" id="unionCouncilNo" value="" />
            <label for="name" class="col-10 offset-1 form-label   mt-2 "> Provincial Constituency No</label>
            <input type="number" class="form-control mt-2 col-10 offset-1" style="border-radius:30px;" required placeholder="Enter provincialConstituencyNo" name="provincialConstituencyNo" id="provincialConstituencyNo" value="" />
            <label for="name" class="col-10 offset-1 form-label   mt-2 "> Tehsil Postal Address</label>
            <input type="text" class="form-control mt-2 col-10 offset-1" style="border-radius:30px;" required placeholder="Enter tehsilPostalAddress" name="tehsilPostalAddress" id="tehsilPostalAddress" value="" />
            <label for="name" class="col-10 offset-1 form-label   mt-2 "> District Postal Address</label>
            <input type="text" class="form-control mt-2 col-10 offset-1" style="border-radius:30px;" required placeholder="Enter districtPostalAddress" name="districtPostalAddress" id="districtPostalAddress" value="" />
            <label for="name" class="col-10 offset-1 form-label   mt-2 "> Phone No Residnce</label>
            <input type="number" class="form-control mt-2 col-10 offset-1" style="border-radius:30px;" required placeholder="Enter phoneNoResidence" name="phoneNoResidence" id="phoneNoResidence" value="" />
            <label for="name" class="col-10 offset-1 form-label   mt-2 "> Phone Office No</label>
            <input type="number" class="form-control mt-2 col-10 offset-1" style="border-radius:30px;" required placeholder="Enter PhoneNoOffice" name="PhoneNoOffice" id="PhoneNoOffice" value="" />
            <label for="name" class="col-10 offset-1 form-label   mt-2 "> Phone Cell No </label>
            <input type="number" class="form-control mt-2 col-10 offset-1" style="border-radius:30px;" required placeholder="Enter phoneNoCell" name="phoneNoCell" id="phoneNoCell" value="" />
            <label for="name" class="col-10 offset-1 form-label   mt-2 ">Email</label>
            <input type="email" class="form-control mt-2 col-10 offset-1" style="border-radius:30px;" required placeholder="Enter email" name="email" id="email" value="" />
            <label for="name" class="col-10 offset-1 form-label   mt-2 "> Permenant Address </label>
            <input type="text" class="form-control mt-2 col-10 offset-1" style="border-radius:30px;" required placeholder="Enter permanentAddress" name="permanentAddress" id="permanentAddress" value="" />
            <label for="name" class="col-10 offset-1 form-label   mt-2 "> Tehsil Permenant Address</label>
            <input type="text" class="form-control mt-2 col-10 offset-1" style="border-radius:30px;" required placeholder="Enter tehsilPermanentAddress" name="tehsilPermanentAddress" id="tehsilPermanentAddress" value="" />
            <label for="name" class="col-10 offset-1 form-label   mt-2 "> District Permenant Address</label>
            <input type="text" class="form-control mt-2 col-10 offset-1" style="border-radius:30px;" required placeholder="Enter districtPermanentAddress" name="districtPermanentAddress" id="districtPermanentAddress" value="" />

            <label for="name" class="col-10 offset-1 form-label   mt-2 "> Introduced By</label>
            <input type="text" class="form-control mt-2 col-10 offset-1" style="border-radius:30px;" required placeholder="Enter IntroducedBy" name="IntroducedBy" id="IntroducedBy" value="" />
            <label for="name" class="col-10 offset-1 form-label   mt-2 "> Membership No</label>
            <input type="number" class="form-control mt-2 col-10 offset-1" style="border-radius:30px;" required placeholder="Enter MembershipNo" name="MembershipNo" id="MembershipNo" value="" />
            <label for="name" class="col-10 offset-1 form-label   mt-2 ">Introduced Forum</label>
            <select required style="border-radius:30px;" required name="IntroducersForum" id="IntroducersForum" class="form-control mt-2 col-10 offset-1">
                <option value="TMQ">TMQ</option>
                <option value="PAT">PAT</option>
                <option value="MWL">MWL</option>
                <option value="MUC">MUC</option>
                <option value="MYL">MYL</option>
                <option value="MSM">MSM</option>
            </select>
            <label for="name" class="col-10 offset-1 form-label   mt-2 "> Memorial Rafaqat By</label>
            <input type="text" class="form-control mt-2 col-10 offset-1" style="border-radius:30px;" required placeholder="Enter MemorialRafaqatBy" name="MemorialRafaqatBy" id="MemorialRafaqatBy" value="" />
            <label for="name" class="col-10 offset-1 form-label   mt-2 "> Religious Thought of School</label>
            <input type="text" class="form-control mt-2 col-10 offset-1" style="border-radius:30px;" required placeholder="Enter ReligiousThoughtOfSchool" name="ReligiousThoughtOfSchool" id="ReligiousThoughtOfSchool" value="" />
            <label for="name" class="col-10 offset-1 form-label   mt-2 "> National Identity Card</label>
            <input type="number" class="form-control mt-2 col-10 offset-1" style="border-radius:30px;" required placeholder="Enter NationalIdentityCardNo" name="NationalIdentityCardNo" id="NationalIdentityCardNo" value="" />
            <label for="name" class="col-10 offset-1 form-label   mt-2 "> Affilated With Any organization</label>
            <select required name="AffiliationWithAnyOrganization" id="AffiliationWithAnyOrganization" class="form-control mt-2 col-10 offset-1">
                <option value="Yes">Yes</option>
                <option value="No">No</option>
            </select>
            <label for="name" class="col-10 offset-1 form-label   mt-2 ">Enter Organization</label>
            <input type="text" class="form-control mt-2 col-10 offset-1" style="border-radius:30px;" required placeholder="Enter OrganizationName" name="OrganizationName" id="OrganizationName" value="" />
            <label for="name" class="col-10 offset-1 form-label   mt-2 ">Responsibility</label>
            <input type="text" class="form-control mt-2 col-10 offset-1" style="border-radius:30px;" required placeholder="Enter Responsibility" name="Responsibility" id="Responsibility" value="" />
            <label for="name" class="col-10 offset-1 form-label   mt-2 ">Desired Magzine</label>
            <select required name="DesiredMagzine" id="DesiredMagzine" class="form-control mt-2 col-10 offset-1">
                <option value="Monthly Minhaj-ul-Quran">Monthly Minhaj-ul-Quran</option>
                <option value="Monthly Dukhtran-e-Islam">Monthly Dukhtran-e-Islam</option>
                <option value="Nothing">Nothing</option>
            </select>
            <label for="name" class="col-10 offset-1 form-label   mt-2 ">Enter Blood Group</label>
            <input style="border-radius:30px;" required type="text" class="form-control mt-2 col-10 offset-1" placeholder="Enter BloodGroup" name="BloodGroup" id="BloodGroup" value="" />
            <label for="name" class="col-10 offset-1 form-label   mt-2 ">Desired Forum</label>
            <select required style="border-radius:30px;" required name="DesiredForum" id="DesiredForum" class="form-control mt-2 col-10 offset-1">
                <option value="TMQ">TMQ</option>
                <option value="PAT">PAT</option>
                <option value="MWL">MWL</option>
                <option value="MUC">MUC</option>
                <option value="MYL">MYL</option>
                <option value="MSM">MSM</option>
            </select>
            <label for="name" class="col-10 offset-1 form-label   mt-2 ">Desired Membership</label>
            <select required style="border-radius:30px;" required name="DesiredMembership" id="DesiredMembership" class="form-control mt-2 col-10 offset-1">
                <option value="Rafaqat with Mag">Rafaqat with Mag</option>
                <option value="Rafaqat without Mag">Rafaqat without Mag</option>
                <option value="Life Membership with Mag">Life Membership with Mag</option>
                <option value="Life Membership without Mag">Life Membership without Mag</option>
                <option value="Memorial Rafaqat">Memorial Rafaqat</option>
            </select>
            <label for="name" class="col-10 offset-1 form-label   mt-2 ">Approval Status</label>
            <select required style="border-radius:30px;" required name="approvalStatus" id="approvalStatus" class="form-control mt-2 col-10 offset-1">
                <option value="true">true</option>
                <option value="false">false</option>
            </select>
            <div class="text-center">
                <button type="button" class=" btn-primary  btn-lg mt-5" style="margin:auto;" onclick="sendApi()">Submit</button>
            </div>
        </form>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script>
        $(document).ready(function() {
            //     var user_id = '';
            //     $('#user_id').on('keyup', function() {
            //     var user_id = $(this).val();
            //     console.log(user_id);
            //     });
            // })


        });

        function sendApi() {
            var name = $('#name').val()
            var fatherName = $('#fatherName').val()
            var husbandName = $('#husbandName').val()
            var gender = $('#gender').val()
            var dob = $('#dob').val()
            var educationalQualification = $('#educationalQualification').val()
            var nameOfEducationalInstitution = $('#nameOfEducationalInstitution').val()
            var profession = $('#profession').val()
            var designation = $('#designation').val()
            var postalAddress = $('#postalAddress').val()
            var unionCouncilNo = $('#unionCouncilNo').val()
            var provincialConstituencyNo = $('#provincialConstituencyNo').val()
            var tehsilPostalAddress = $('#tehsilPostalAddress').val()
            var districtPostalAddress = $('#districtPostalAddress').val()
            var phoneNoResidence = $('#phoneNoResidence').val()
            var PhoneNoOffice = $('#PhoneNoOffice').val()
            var phoneNoCell = $('#phoneNoCell').val()
            var email = $('#email').val()
            var permanentAddress = $('#permanentAddress').val()
            var tehsilPermanentAddress = $('#tehsilPermanentAddress').val()
            var districtPermanentAddress = $('#districtPermanentAddress').val()
            var IntroducedBy = $('#IntroducedBy').val()
            var MembershipNo = $('#MembershipNo').val()
            var IntroducersForum = $('#IntroducersForum').val()
            var MemorialRafaqatBy = $('#MemorialRafaqatBy').val()
            var ReligiousThoughtOfSchool = $('#ReligiousThoughtOfSchool').val()
            var NationalIdentityCardNo = $('#NationalIdentityCardNo').val()
            var AffiliationWithAnyOrganization = $('#AffiliationWithAnyOrganization').val()
            var OrganizationName = $('#OrganizationName').val()
            var Responsibility = $('#Responsibility').val()
            var DesiredMagzine = $('#DesiredMagzine').val()
            var BloodGroup = $('#BloodGroup').val()
            var DesiredForum = $('#DesiredForum').val()
            var DesiredMembership = $('#DesiredMembership').val()
            var approvalStatus = $('#approvalStatus').val()

            var DateOfForm = new Date()





            var InsertAPIURL = 'http://137.184.28.231:4000/create-request';
            var headers = {
                Accept: 'application/json',
                'Content-Type': 'application/json',
            };

            fetch(InsertAPIURL, {
                    method: 'POST',
                    headers: headers,
                    body: JSON.stringify({
                        name: name,
                        fatherName: fatherName,
                        husbandName: husbandName,
                        gender: gender,
                        dob: dob,
                        educationalQualification: educationalQualification,
                        nameOfEducationalInstitution: nameOfEducationalInstitution,
                        profession: profession,
                        designation: designation,
                        postalAddress: postalAddress,
                        unionCouncilNo: unionCouncilNo,
                        provincialConstituencyNo: provincialConstituencyNo,
                        tehsilPostalAddress: tehsilPostalAddress,
                        districtPostalAddress: districtPostalAddress,
                        phoneNoResidence: phoneNoResidence,
                        PhoneNoOffice: PhoneNoOffice,
                        phoneNoCell: phoneNoCell,
                        email: email,
                        permanentAddress: permanentAddress,
                        tehsilPermanentAddress: tehsilPermanentAddress,
                        districtPermanentAddress: districtPermanentAddress,
                        IntroducedBy: IntroducedBy,
                        MembershipNo: MembershipNo,
                        IntroducersForum: IntroducersForum,
                        MemorialRafaqatBy: MemorialRafaqatBy,
                        ReligiousThoughtOfSchool: ReligiousThoughtOfSchool,
                        NationalIdentityCardNo: NationalIdentityCardNo,
                        AffiliationWithAnyOrganization: AffiliationWithAnyOrganization,
                        OrganizationName: OrganizationName,
                        Responsibility: Responsibility,
                        DesiredMagzine: DesiredMagzine,
                        BloodGroup: BloodGroup,
                        DesiredForum: DesiredForum,
                        DesiredMembership: DesiredMembership,
                        approvalStatus: approvalStatus,
                        DateOfForm: DateOfForm,
                    }),
                })
                .then(response => response.json())
                .then(response => {
                    alert('Inserted');

                    console.log(response);


                })
                .catch(error => {
                    alert('this is error' + error);
                });
        }
    </script>
</body>

</html>