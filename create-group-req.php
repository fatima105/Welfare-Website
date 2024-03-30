<!doctype html>
<html lang="en">
<style>
    /* .border-class {
        border: 0.5px thin black solid;
        margin: 20px;
        padding: 20px;
    } */

    .radius-30 {
        border-radius: 30px;
    }
</style>

<head>
    <?php header('Access-Control-Allow-Origin:*'); ?>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />

</head>

<body>
    <div class="container-fluid border-5">
        <form class="border-class card " action="javascript:void(0)" method="POST">
            <div class="container-fluid">
                <h4 class="display-6 fw-bold text-center text-success mt-2">
                    Create UC Group Request

                    <div class="row">
                        <input type="hidden" value="UC" id="userType" name="userType" />
                        <div class="col-md-6 col-sm-12">
                            <?php $url = 'http://137.184.28.231:4000/get-all-district';
                            //Use file_get_contents() function to retrieve the data
                            $data = file_get_contents($url);

                            // // Decode the JSON data
                            $json = json_decode($data, true); ?>
                            <label for="DistrictArea" class="col-10 offset-1 form-label   mt-2 text-left">District Area</label>
                            <select required name="DistrictArea" id="DistrictArea" class="form-control mt-2 col-10 offset-1">
                                <?php
                                foreach ($json as $user) { ?>


                                    <option value="<?php echo $user['_id']; ?>"><?php echo $user['name']; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="col-md-6 col-12">
                            <?php $url = 'http://137.184.28.231:4000/get-all-pp';
                            //Use file_get_contents() function to retrieve the data
                            $data = file_get_contents($url);

                            // // Decode the JSON data
                            $json = json_decode($data, true); ?>
                            <label for="pp" class="col-10 offset-1 form-label   mt-2 text-left ">PP</label>
                            <select required name="PP" id="PPArea" class="form-control mt-2 col-10 offset-1">
                                <?php
                                foreach ($json as $user) { ?>


                                    <option value="<?php echo $user['_id']; ?>"><?php echo $user['name']; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-12">
                            <?php $url = 'http://137.184.28.231:4000/get-all-uc';
                            //Use file_get_contents() function to retrieve the data
                            $data = file_get_contents($url);

                            // // Decode the JSON data
                            $json = json_decode($data, true);

                            ?>


                            <label for="UCArea" class="col-10 offset-1 form-label text-left   mt-2">UC Area</label>
                            <select required name="UCArea" id="UCArea" class="form-control mt-2 col-10 offset-1">
                                <?php
                                foreach ($json as $user) { ?>


                                    <option value="<?php echo $user['_id']; ?>"><?php echo '' . $user['name']; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="col-md-6 col-12">
                            <?php $urls = 'http://137.184.28.231:4000/get-all-unit';
                            //Use file_get_contents() function to retrieve the data
                            $datas = file_get_contents($urls);

                            // // Decode the JSON data
                            $jsons = json_decode($datas, true);
                            ?>

                            <label for="UCArea" class="col-10 offset-1 form-label   mt-2 text-left">Unit </label>
                            <select required name="UCArea" id="UCArea" class="form-control mt-2 col-10 offset-1">
                                <?php
                                foreach ($jsons as $users) { ?>


                                    <option value="<?php echo $users['_id']; ?>"><?php echo $users['name']; ?></option>
                                <?php } ?>
                            </select>
                        </div>

                    </div>

            </div>
            <div class="border border-danger mt-2">
                <div class="container ">
                    <div class="row border-3">
                        <div class="col-6">
                            <h6 class="m-2 text-left">
                                Saddar
                            </h6>
                        </div>
                        <div class="col-6">
                            <h6 class="m-2 text-right">
                                صدر
                            </h6>
                        </div>
                    </div>
                </div>

                <label for="name" class="col-9 offset-1 form-label  mt-2">Name </label>
                <input required type="text" class="form-control col-9 offset-1     mt-0" style="border-radius:30px;" required placeholder="Enter Name" name="Sname" id="Sname" value="" />

                <label for="name" class="col-9 offset-1 form-label mt-2 "> Father Name </label>
                <input required type="text" class="form-control mt-2 col-9 offset-1  mt-0 " style="border-radius:30px;" required placeholder="Enter fatherName" name="SfatherName" id="SfatherName" value="" />


                <label for="name" class="col-9 offset-1 form-label   mt-2 "> Educational Qualification</label>
                <input required type="text" class="form-control mt-2 col-9 offset-1 mt-0" style="border-radius:30px;" required placeholder="Enter Educational Qualification" name="SeducationalQualification" id="SeducationalQualification" value="" />

                <label for="name" class="col-9 offset-1 form-label     mt-2 "> RafaqatNo</label>
                <input required type="text" class="form-control mt-2 col-9 offset-1" style="border-radius:30px;" required placeholder="Enter Rafaqat No" name="SRafaqatNo" id="SRafaqatNo" value="" />

                <label for="name" class="col-9 offset-1 form-label   mt-2 "> Address </label>
                <input required type="text" class="form-control mt-2 col-9 offset-1" style="border-radius:30px;" required placeholder="Enter Address" name="Saddress" id="Saddress" value="" />
                <label for="name" class="col-9 offset-1 form-label     mt-2 "> Proffession</label>
                <input required type="text" class="form-control mt-2 col-9 offset-1" style="border-radius:30px;" required placeholder="Enter Profession" name="Sprofession" id="Sprofession" value="" />


                <label for="name" class="col-9 offset-1 form-label     mt-2 "> Mobile Whtasapp No</label>
                <input required type="text" class="form-control mt-2 col-9 offset-1" style="border-radius:30px;" required placeholder="Mobile Whatsapp No" name="SmobileWhatsapNo" id="SmobileWhatsapNo" value="" />

                <label for="name" class="col-9 offset-1 form-label   mt-2 ">Email</label>
                <input required type="email" class="form-control mt-2 col-9 offset-1 mb-2" style="border-radius:30px;" required placeholder="Enter email" name="Semail" id="Semail" value="" />

            </div>
            <div class="border border-danger mt-2">
                <div class="container ">
                    <div class="row border-3">
                        <div class="col-6">
                            <h6 class="m-2 text-left">
                                Nazim
                            </h6>
                        </div>
                        <div class="col-6">
                            <h6 class="m-2 text-right">
                                ناظم
                            </h6>
                        </div>
                    </div>
                </div>

                <label for="name" class="col-9 offset-1 form-label  mt-2">Name </label>
                <input required type="text" class="form-control col-9 offset-1     mt-0" style="border-radius:30px;" required placeholder="Enter Name" name="Nname" id="Nname" value="" />

                <label for="name" class="col-9 offset-1 form-label mt-2 "> Father Name </label>
                <input required type="text" class="form-control mt-2 col-9 offset-1  mt-0 " style="border-radius:30px;" required placeholder="Enter fatherName" name="NfatherName" id="NfatherName" value="" />


                <label for="name" class="col-9 offset-1 form-label   mt-2 "> Educational Qualification</label>
                <input required type="text" class="form-control mt-2 col-9 offset-1 mt-0" style="border-radius:30px;" required placeholder="Enter Educational Qualification" name="NeducationalQualification" id="NeducationalQualification" value="" />

                <label for="name" class="col-9 offset-1 form-label     mt-2 "> RafaqatNo</label>
                <input required type="text" class="form-control mt-2 col-9 offset-1" style="border-radius:30px;" required placeholder="Enter Rafaqat No" name="NRafaqatNo" id="NRafaqatNo" value="" />

                <label for="name" class="col-9 offset-1 form-label   mt-2 "> Address </label>
                <input required type="text" class="form-control mt-2 col-9 offset-1" style="border-radius:30px;" required placeholder="Enter Address" name="Naddress" id="Naddress" value="" />
                <label for="name" class="col-9 offset-1 form-label     mt-2 "> Proffession</label>
                <input required type="text" class="form-control mt-2 col-9 offset-1" style="border-radius:30px;" required placeholder="Enter Profession" name="Nprofession" id="Nprofession" value="" />


                <label for="name" class="col-9 offset-1 form-label     mt-2 "> Mobile Whtasapp No</label>
                <input required type="text" class="form-control mt-2 col-9 offset-1" style="border-radius:30px;" required placeholder="Mobile Whatsapp No" name="NmobileWhatsapNo" id="NmobileWhatsapNo" value="" />

                <label for="name" class="col-9 offset-1 form-label   mt-2 ">Email</label>
                <input required type="email" class="form-control mt-2 col-9 offset-1 mb-3  mb-2" style="border-radius:30px;" required placeholder="Enter email" name="Nemail" id="Nemail" value="" />

            </div>

            <div class="border border-danger mt-2 mb-2">

                <div class="container ">
                    <div class="row border-3">
                        <div class="col-6">
                            <h6 class="m-2 text-left">
                                Nazim Dawat
                            </h6>
                        </div>
                        <div class="col-6">
                            <h6 class="m-2 text-right">
                                ناظم دعوت
                            </h6>

                        </div>
                    </div>
                </div>
                <label for="name" class="col-9 offset-1 form-label  mt-2">Name </label>
                <input required type="text" class="form-control col-9 offset-1     mt-0" style="border-radius:30px;" required placeholder="Enter Name" name="NDname" id="NDname" value="" />

                <label for="name" class="col-9 offset-1 form-label mt-2 "> Father Name </label>
                <input required type="text" class="form-control mt-2 col-9 offset-1  mt-0 " style="border-radius:30px;" required placeholder="Enter fatherName" name="NDfatherName" id="NDfatherName" value="" />


                <label for="name" class="col-9 offset-1 form-label   mt-2 "> Educational Qualification</label>
                <input required type="text" class="form-control mt-2 col-9 offset-1 mt-0" style="border-radius:30px;" required placeholder="Enter Educational Qualification" name="NDeducationalQualification" id="NDeducationalQualification" value="" />

                <label for="name" class="col-9 offset-1 form-label     mt-2 "> RafaqatNo</label>
                <input required type="text" class="form-control mt-2 col-9 offset-1" style="border-radius:30px;" required placeholder="Enter Rafaqat No" name="NDRafaqatNo" id="NDRafaqatNo" value="" />

                <label for="name" class="col-9 offset-1 form-label   mt-2 "> Address </label>
                <input required type="text" class="form-control mt-2 col-9 offset-1" style="border-radius:30px;" required placeholder="Enter Address" name="NDaddress" id="NDaddress" value="" />
                <label for="name" class="col-9 offset-1 form-label     mt-2 "> Proffession</label>
                <input required type="text" class="form-control mt-2 col-9 offset-1" style="border-radius:30px;" required placeholder="Enter Profession" name="NDprofession" id="NDprofession" value="" />


                <label for="name" class="col-9 offset-1 form-label     mt-2 "> Mobile Whtasapp No</label>
                <input required type="text" class="form-control mt-2 col-9 offset-1" style="border-radius:30px;" required placeholder="Mobile Whatsapp No" name="NDmobileWhatsapNo" id="NDmobileWhatsapNo" value="" />

                <label for="name" class="col-9 offset-1 form-label   mt-2 ">Email</label>
                <input required type="email" class="form-control mt-2 col-9 offset-1 mb-2" style="border-radius:30px;" required placeholder="Enter email" name="NDemail" id="NDemail" value="" />

            </div>



            <div class="border border-danger mt-2">
                <h6 class="m-2">
                    <div class="container ">
                        <div class="row border-3">
                            <div class="col-6">
                                <h6 class="m-2 text-left">
                                    Nazim Membership
                                </h6>
                            </div>
                            <div class="col-6">
                                <h6 class="m-2 text-right">
                                    ناظم ممبرشیپ
                                </h6>

                            </div>
                        </div>
                </h6>
                <label for="name" class="col-9 offset-1 form-label  mt-2">Name </label>
                <input required type="text" class="form-control col-9 offset-1     mt-0" style="border-radius:30px;" required placeholder="Enter Name" name="NMname" id="NMname" value="" />

                <label for="name" class="col-9 offset-1 form-label mt-2 "> Father Name </label>
                <input required type="text" class="form-control mt-2 col-9 offset-1  mt-0 " style="border-radius:30px;" required placeholder="Enter fatherName" name="NMfatherName" id="NMfatherName" value="" />


                <label for="name" class="col-9 offset-1 form-label   mt-2 "> Educational Qualification</label>
                <input required type="text" class="form-control mt-2 col-9 offset-1 mt-0" style="border-radius:30px;" required placeholder="Enter Educational Qualification" name="NMeducationalQualification" id="NMeducationalQualification" value="" />

                <label for="name" class="col-9 offset-1 form-label     mt-2 "> RafaqatNo</label>
                <input required type="text" class="form-control mt-2 col-9 offset-1" style="border-radius:30px;" required placeholder="Enter Rafaqat No" name="NMRafaqatNo" id="NMRafaqatNo" value="" />

                <label for="name" class="col-9 offset-1 form-label   mt-2 "> Address </label>
                <input required type="text" class="form-control mt-2 col-9 offset-1" style="border-radius:30px;" required placeholder="Enter Address" name="NMaddress" id="NMaddress" value="" />
                <label for="name" class="col-9 offset-1 form-label     mt-2 "> Proffession</label>
                <input required type="text" class="form-control mt-2 col-9 offset-1" style="border-radius:30px;" required placeholder="Enter Profession" name="NMprofession" id="NMprofession" value="" />


                <label for="name" class="col-9 offset-1 form-label     mt-2 "> Mobile Whtasapp No</label>
                <input required type="text" class="form-control mt-2 col-9 offset-1" style="border-radius:30px;" required placeholder="Mobile Whatsapp No" name="NMmobileWhatsapNo" id="NMmobileWhatsapNo" value="" />

                <label for="name" class="col-9 offset-1 form-label   mt-2 ">Email</label>
                <input required type="email" class="form-control mt-2 col-9 offset-1" style="border-radius:30px;" required placeholder="Enter email" name="NMemail" id="NMemail" value="" />

            </div>


            <div class="border border-danger mt-2">
                <h6 class="m-2">
                    <div class="container ">
                        <div class="row border-3">
                            <div class="col-6">
                                <h6 class="m-2 text-left">
                                    Nazim ؐMaliat
                                </h6>
                            </div>
                            <div class="col-6">
                                <h6 class="m-2 text-right">
                                    ناظم مالیات
                                </h6>

                            </div>
                        </div>
                </h6>
                <label for="name" class="col-9 offset-1 form-label  mt-2">Name </label>
                <input required type="text" class="form-control col-9 offset-1     mt-0" style="border-radius:30px;" required placeholder="Enter Name" name="NMAname" id="NMAname" value="" />

                <label for="name" class="col-9 offset-1 form-label mt-2 "> Father Name </label>
                <input required type="text" class="form-control mt-2 col-9 offset-1  mt-0 " style="border-radius:30px;" required placeholder="Enter fatherName" name="NMAfatherName" id="NMAfatherName" value="" />


                <label for="name" class="col-9 offset-1 form-label   mt-2 "> Educational Qualification</label>
                <input required type="text" class="form-control mt-2 col-9 offset-1 mt-0" style="border-radius:30px;" required placeholder="Enter Educational Qualification" name="NMAeducationalQualification" id="NMAeducationalQualification" value="" />

                <label for="name" class="col-9 offset-1 form-label     mt-2 "> RafaqatNo</label>
                <input required type="text" class="form-control mt-2 col-9 offset-1" style="border-radius:30px;" required placeholder="Enter Rafaqat No" name="NMARafaqatNo" id="NMARafaqatNo" value="" />

                <label for="name" class="col-9 offset-1 form-label   mt-2 "> Address </label>
                <input required type="text" class="form-control mt-2 col-9 offset-1" style="border-radius:30px;" required placeholder="Enter Address" name="NMAaddress" id="NMAaddress" value="" />
                <label for="name" class="col-9 offset-1 form-label     mt-2 "> Proffession</label>
                <input required type="text" class="form-control mt-2 col-9 offset-1" style="border-radius:30px;" required placeholder="Enter Profession" name="NMAprofession" id="NMAprofession" value="" />


                <label for="name" class="col-9 offset-1 form-label     mt-2 "> Mobile Whtasapp No</label>
                <input required type="text" class="form-control mt-2 col-9 offset-1" style="border-radius:30px;" required placeholder="Mobile Whatsapp No" name="NMAmobileWhatsapNo" id="NMAmobileWhatsapNo" value="" />

                <label for="name" class="col-9 offset-1 form-label   mt-2 ">Email</label>
                <input required type="email" class="form-control mt-2 col-9 offset-1" style="border-radius:30px;" required placeholder="Enter email" name="NMAemail" id="NMAemail" value="" />

            </div>





            <div class="border border-dark mt-2">
                <h6 class="m-2">
                    <div class="container ">
                        <div class="row border-3">
                            <div class="col-6">
                                <h6 class="m-2 text-left">
                                    Nazim Social Media
                                </h6>
                            </div>
                            <div class="col-6">
                                <h6 class="m-2 text-right">
                                    ناظم سوشل میدیا
                                </h6>

                            </div>
                        </div>
                </h6>
                <label for="name" class="col-9 offset-1 form-label  mt-2">Name </label>
                <input required type="text" class="form-control col-9 offset-1     mt-0" style="border-radius:30px;" required placeholder="Enter Name" name="NSMname" id="NSMname" value="" />

                <label for="name" class="col-9 offset-1 form-label mt-2 "> Father Name </label>
                <input required type="text" class="form-control mt-2 col-9 offset-1  mt-0 " style="border-radius:30px;" required placeholder="Enter fatherName" name="NSMfatherName" id="NSMfatherName" value="" />


                <label for="name" class="col-9 offset-1 form-label   mt-2 "> Educational Qualification</label>
                <input required type="text" class="form-control mt-2 col-9 offset-1 mt-0" style="border-radius:30px;" required placeholder="Enter Educational Qualification" name="NSMeducationalQualification" id="NSMeducationalQualification" value="" />

                <label for="name" class="col-9 offset-1 form-label     mt-2 "> RafaqatNo</label>
                <input required type="text" class="form-control mt-2 col-9 offset-1" style="border-radius:30px;" required placeholder="Enter Rafaqat No" name="NSMRafaqatNo" id="NSMRafaqatNo" value="" />

                <label for="name" class="col-9 offset-1 form-label   mt-2 "> Address </label>
                <input required type="text" class="form-control mt-2 col-9 offset-1" style="border-radius:30px;" required placeholder="Enter Address" name="NSMaddress" id="NSMaddress" value="" />
                <label for="name" class="col-9 offset-1 form-label     mt-2 "> Proffession</label>
                <input required type="text" class="form-control mt-2 col-9 offset-1" style="border-radius:30px;" required placeholder="Enter Profession" name="NSMprofession" id="NSMprofession" value="" />


                <label for="name" class="col-9 offset-1 form-label     mt-2 "> Mobile Whtasapp No</label>
                <input required type="text" class="form-control mt-2 col-9 offset-1" style="border-radius:30px;" required placeholder="Mobile Whatsapp No" name="NSMmobileWhatsapNo" id="NSMmobileWhatsapNo" value="" />

                <label for="name" class="col-9 offset-1 form-label   mt-2 ">Email</label>
                <input required type="email" class="form-control mt-2 col-9 offset-1" style="border-radius:30px;" required placeholder="Enter email" name="NSMemail" id="NSMemail" value="" />

            </div>
            <div class="border border-danger mt-2 mb-2">

                <div class="container ">
                    <div class="row border-3">
                        <div class="col-6">
                            <h6 class="m-2 text-left">
                                Nazim Tarbiat
                            </h6>
                        </div>
                        <div class="col-6">
                            <h6 class="m-2 text-right">
                                ناظم تربیت
                            </h6>

                        </div>
                    </div>
                </div>
                <label for="name" class="col-9 offset-1 form-label  mt-2">Name </label>
                <input required type="text" class="form-control col-9 offset-1     mt-0" style="border-radius:30px;" required placeholder="Enter Name" name="NTname" id="NTname" value="" />

                <label for="name" class="col-9 offset-1 form-label mt-2 "> Father Name </label>
                <input required type="text" class="form-control mt-2 col-9 offset-1  mt-0 " style="border-radius:30px;" required placeholder="Enter fatherName" name="NTfatherName" id="NTfatherName" value="" />


                <label for="name" class="col-9 offset-1 form-label   mt-2 "> Educational Qualification</label>
                <input required type="text" class="form-control mt-2 col-9 offset-1 mt-0" style="border-radius:30px;" required placeholder="Enter Educational Qualification" name="NTeducationalQualification" id="NTeducationalQualification" value="" />

                <label for="name" class="col-9 offset-1 form-label     mt-2 "> RafaqatNo</label>
                <input required type="text" class="form-control mt-2 col-9 offset-1" style="border-radius:30px;" required placeholder="Enter Rafaqat No" name="NTRafaqatNo" id="NTRafaqatNo" value="" />

                <label for="name" class="col-9 offset-1 form-label   mt-2 "> Address </label>
                <input required type="text" class="form-control mt-2 col-9 offset-1" style="border-radius:30px;" required placeholder="Enter Address" name="NTaddress" id="NTaddress" value="" />
                <label for="name" class="col-9 offset-1 form-label     mt-2 "> Proffession</label>
                <input required type="text" class="form-control mt-2 col-9 offset-1" style="border-radius:30px;" required placeholder="Enter Profession" name="NTprofession" id="NTprofession" value="" />


                <label for="name" class="col-9 offset-1 form-label     mt-2 "> Mobile Whtasapp No</label>
                <input required type="text" class="form-control mt-2 col-9 offset-1" style="border-radius:30px;" required placeholder="Mobile Whatsapp No" name="NTmobileWhatsapNo" id="NTmobileWhatsapNo" value="" />

                <label for="name" class="col-9 offset-1 form-label   mt-2 ">Email</label>
                <input required type="email" class="form-control mt-2 col-9 offset-1" style="border-radius:30px;" required placeholder="Enter email" name="NTemail" id="NTemail" value="" />

            </div>
            <label for="name" class="col-10 offset-1 form-label   mt-2 ">Name And Signature</label>
            <select required style="border-radius:30px;" required name="nameAndSignature" id="nameAndSignature" class="form-control mt-2 col-10 offset-1">
                <option value="District">District</option>

                <option value="Province">Province</option>
                <option value="UC">UC</option>
                <option value="Unit">Unit</option>

            </select>
            <div class="text-center">
                <button type="button" class=" btn btn-success  btn-lg mt-5" style="margin:auto;" onclick="sendApi()">Submit</button>
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
            var DistrictArea = $('#DistrictArea').val()
            var userType = $('#userType').val()
            var PPArea = $('#PPArea').val()
            var UCArea = $('#UCArea').val()
            var UnitArea = $('#UnitArea').val()
            //Saddar
            var Sname = $('#Sname').val()

            var SfatherName = $('#SfatherName').val()

            var SeducationalQualification = $('#SeducationalQualification').val()
            var SRafaqatNo = $('#SRafaqatNo').val()
            var Saddress = $('#Saddress').val()
            var Sprofession = $('#Sprofession').val()

            var SmobileWhatsapNo = $('#SmobileWhatsapNo').val()
            var Semail = $('#Semail').val()
            // Nazim
            var Nname = $('#Nname').val()

            var NfatherName = $('#NfatherName').val()

            var NeducationalQualification = $('#NeducationalQualification').val()
            var NRafaqatNo = $('#NRafaqatNo').val()
            var Naddress = $('#Naddress').val()
            var Nprofession = $('#Nprofession').val()

            var NmobileWhatsapNo = $('#NmobileWhatsapNo').val()
            var Nemail = $('#Nemail').val()
            var DateOfForm = new Date()

            //Nazim Dawat

            var NDname = $('#NDname').val()

            var NDfatherName = $('#NDfatherName').val()

            var NDeducationalQualification = $('#NDeducationalQualification').val()
            var NDRafaqatNo = $('#NDRafaqatNo').val()
            var NDaddress = $('#NDaddress').val()
            var NDprofession = $('#NDprofession').val()

            var NDmobileWhatsapNo = $('#NDmobileWhatsapNo').val()
            var NDemail = $('#NDemail').val()
            //Nazim Membership
            var NMname = $('#NMname').val()

            var NMfatherName = $('#NMfatherName').val()

            var NMeducationalQualification = $('#NMeducationalQualification').val()
            var NMRafaqatNo = $('#NMRafaqatNo').val()
            var NMaddress = $('#NMaddress').val()
            var NMprofession = $('#NMprofession').val()

            var NMmobileWhatsapNo = $('#NMmobileWhatsapNo').val()
            var NMemail = $('#NMemail').val()

            //Nazim Maliat
            var NMAname = $('#NMAname').val()

            var NMAfatherName = $('#NMAfatherName').val()

            var NMAeducationalQualification = $('#NMAeducationalQualification').val()
            var NMARafaqatNo = $('#NMARafaqatNo').val()
            var NMAaddress = $('#NMAaddress').val()
            var NMAprofession = $('#NMAprofession').val()

            var NMAmobileWhatsapNo = $('#NMAmobileWhatsapNo').val()
            var NMAemail = $('#NMAemail').val()


            // Nazim Social Media
            var NSMname = $('#NSMname').val()

            var NSMfatherName = $('#NSMfatherName').val()

            var NSMeducationalQualification = $('#NSMeducationalQualification').val()
            var NSMRafaqatNo = $('#NSMRafaqatNo').val()
            var NSMaddress = $('#NSMaddress').val()
            var NSMprofession = $('#NSMprofession').val()

            var NSMmobileWhatsapNo = $('#NSMmobileWhatsapNo').val()
            var NSMemail = $('#NSMemail').val()
            //Nazim Tarbiat
            var NTname = $('#NTname').val()

            var NTfatherName = $('#NTfatherName').val()

            var NTeducationalQualification = $('#NTeducationalQualification').val()
            var NTRafaqatNo = $('#NTRafaqatNo').val()
            var NTaddress = $('#NTaddress').val()
            var NTprofession = $('#NTprofession').val()

            var NTmobileWhatsapNo = $('#NTmobileWhatsapNo').val()
            var NTemail = $('#NTemail').val()


            var nameAndSignature = $('#nameAndSignature').val()



            var InsertAPIURL = 'http://137.184.28.231/create-group-req';
            var headers = {
                Accept: 'application/json',
                'Content-Type': 'application/json',
            };

            fetch(InsertAPIURL, {
                    method: 'POST',
                    headers: headers,
                    body: JSON.stringify({
                        DistrictArea: DistrictArea,
                        userType: userType,
                        PPArea: PPArea,
                        UCArea: UCArea,

                        UnitArea: UnitArea,
                        //SADDAR
                        Sname: Sname,
                        SfatherName: SfatherName,

                        SeducationalQualification: SeducationalQualification,
                        SRafaqatNo: SRafaqatNo,
                        Saddress: Saddress,
                        Sprofession: Sprofession,
                        SmobileWhatsapNo: SmobileWhatsapNo,
                        Semail: Semail,


                        //NAZIM
                        Nname: Nname,
                        NfatherName: NfatherName,

                        NeducationalQualification: NeducationalQualification,
                        NRafaqatNo: NRafaqatNo,
                        Naddress: Naddress,
                        Nprofession: Nprofession,
                        NmobileWhatsapNo: NmobileWhatsapNo,
                        Nemail: Nemail,

                        // Nazim Dawat

                        NDname: NDname,
                        NDfatherName: NDfatherName,

                        NDeducationalQualification: NDeducationalQualification,
                        NDRafaqatNo: NDRafaqatNo,
                        NDaddress: NDaddress,
                        NDprofession: NDprofession,
                        NDmobileWhatsapNo: NDmobileWhatsapNo,
                        NDemail: NDemail,


                        //Nazim Membership
                        NMname: NMname,
                        NMfatherName: NMfatherName,

                        NMeducationalQualification: NMeducationalQualification,
                        NMRafaqatNo: NMRafaqatNo,
                        Naddress: NMaddress,
                        NMprofession: NMprofession,
                        NMmobileWhatsapNo: NMmobileWhatsapNo,
                        NMemail: NMemail,

                        //Nazim Maliat
                        NMAname: NMAname,
                        NMAfatherName: NMAfatherName,

                        NMAeducationalQualification: NMAeducationalQualification,
                        NMARafaqatNo: NMARafaqatNo,
                        NMAaddress: NMAaddress,
                        NMAprofession: NMAprofession,
                        NMAmobileWhatsapNo: NMAmobileWhatsapNo,
                        NMAemail: NMAemail,
                        //NAZIM Social Media
                        NSMname: NSMname,
                        NSMfatherName: NSMfatherName,

                        NSMeducationalQualification: NSMeducationalQualification,
                        NSMRafaqatNo: NSMRafaqatNo,
                        NSMaddress: NSMaddress,
                        NSMprofession: NSMprofession,
                        NSMmobileWhatsapNo: NSMmobileWhatsapNo,
                        NSMemail: NSMemail,

                        //NazimTarbiat

                        NTname: NTname,
                        NTfatherName: NTfatherName,

                        NTeducationalQualification: NTeducationalQualification,
                        NTRafaqatNo: NTRafaqatNo,
                        NTaddress: NTaddress,
                        NTprofession: NTprofession,
                        NTmobileWhatsapNo: NTmobileWhatsapNo,
                        NTemail: NTemail,


                        //
                        DateOfForm: DateOfForm,
                        nameAndSignature: nameAndSignature,




                    }),
                })

                .then(response => response.json())
                .then(response => {
                    alert('Data added');
                    console.log(response);

                })
                .catch(error => {
                    alert('this is error' + error);
                });
        }
    </script>
</body>

</html>