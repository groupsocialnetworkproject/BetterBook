<?php 
session_start();
if (isset($_SESSION['user_online'])){
    
}
else{
    header('Location:https://betterbook.000webhostapp.com/login.php');
}
?>
<!DOCTYPE html>
<html>
    <head>
       	<meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <link type="text/css" rel="stylesheet" href="css/jobs_page.css?version=1">
  		<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  		 <!-- Favicon -->
        <link rel="icon" type="image/png" href="assets/favicon.png">
        <?php  include_once 'db_connect.php'; include_once 'job_objects.php';?>
    </head>
    <body id="Jobs_Page">
    <?php include 'Header.php';?>
        <div class="row" id="space30"></div>
    	<div id="container">
            <div class="row" id="space10"></div>
            <div class="row" id="filterwidth">
        <div class="col" id="filterButtons">
            <div class="row" id="space10"></div>
            <div class="row">
                <div class="col-6">
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <p>Field</p>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                            <button class="dropdown-item" type="button" id="soft">Software and Technology</button>
                            <button class="dropdown-item" type="button" id="mech">Mechanical Engineering</button>
                            <button class="dropdown-item" type="button" id="elec">Electronic Engineering</button>
                            <button class="dropdown-item" type="button" id="chem">Chemical Engineering</button>
                        </div>
                    </div>
                </div>
                <div class="col-5" id="filterText">
                    <span class="align-middle" id="fieBox"></span>
                </div>
            </div>
            <div class="row" id="space10"></div>
            <div class="row">
                <div class="col-6">
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <p>Contract <br />Type</p>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                            <button class="dropdown-item" type="button" id="part">Part Time Placement</button>
                            <button class="dropdown-item" type="button" id="grad">Graduate Jobs</button>
                            <button class="dropdown-item" type="button" id="summ">Summer Placement</button>
                            <button class="dropdown-item" type="button" id="12mon">12 Month Placement</button>
                        </div>
                    </div>
                </div>
                <div class="col-5" id="filterText">
                    <span class="align-middle" id="typBox"></span>
                </div>
            </div>
            <div class="row" id="space10"></div>
            <div class="row">
                <div class="col-6">
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <p>Salary</p>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                            <button class="dropdown-item" type="button" id="10k">£0 - 10000</button>
                            <button class="dropdown-item" type="button" id="20k">£10000 - 20000</button>
                            <button class="dropdown-item" type="button" id="30k">£20000 - 30000</button>
                            <button class="dropdown-item" type="button" id="more">£30000 +</button>
                        </div>
                    </div>
                </div>
                <div class="col-5" id="filterText">
                    <span class="align-middle" id="salBox"></span>
                </div>
            </div>
            <div class="row" id="space10"></div>
            <div class="row">
                <div class="col-6">
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <p>Location</p>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                            <button class="dropdown-item" type="button" id="SY">South Yorkshire</button>
                            <button class="dropdown-item" type="button" id="NY">North Yorkshire</button>
                            <button class="dropdown-item" type="button" id="EY">East Yorkshire</button>
                            <button class="dropdown-item" type="button" id="WY">West Yorkshire</button>
                            <button class="dropdown-item" type="button" id="other">Everywhere else is pointless</button>
                        </div>
                    </div>
                </div>
                <div class="col-5" id="filterText">
                    <span class="align-middle" id="locBox"></span>
                </div>
            </div>
            <div class="row" id="space10"></div>
            <div class="row">
                                <div class="col-6">
                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <p>Order By</p>
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                        <button class="dropdown-item" type="button" id="job">Job Title</button>
                                        <button class="dropdown-item" type="button" id="company">Company Name</button>
                                      </div>
                                    </div>
                                </div>
                                <div class="col-5" id="filterText">
                                    <span class="align-middle" id="ordBox"></span>
                                </div>
                            </div>
            <div class="row" id="space10"></div>
            <div class="row">
                        <div class="col-12">
                            <button class="btn btn-primary" onclick="order()" id="searchBTN">Update Results</button>
                            <button class="btn btn-danger" onclick="clearTxt()" id="clearTxtBtn" style="margin-left:10px;margin-right:30px;"">Clear Results</button>
                        </div>
           			</div>
            <div class="row" id="space10"></div>
        </div>
    </div>
     <div class="row" id="JobsContainer">
        <div class="col" id="jobsInfoContainer">
            <div class="row" id="Titles">
                <div class="col-4">
                    <p><b>Jobs Found</b></p>
                </div>
                <div class="col-4">
                    <p><b>Average Salary</b></p>
                </div>
                <div class="col-4">
                    <p><b>Number of Companies</b></p>
                </div>
            </div>
            <div class="row" id="score">
                <div class="col-1" id="score1"></div>
                <div class="col-2" id="numOfJobs">
                    <td class="align-middle">
                                <?php
                                    echo count($jobs_array);
                                ?>
                    </td>
                </div>
                <div class="col-2"></div>
                <div class="col-2" id="average_sal">
                    <td class="align-middle">
                                <?php
                                    $total = 0;
                                    for($x = 0; $x < sizeof($jobs_array); $x++)
                                    {
                                        $total = $total + $jobs_array[$x]->getSalary(); 
                                    }
                                    $out = round($total / sizeof($jobs_array));
                                    echo "£" . $out;
                                ?>
                    </td>
                </div>
                <div class="col-2"></div>
                <div class="col-2" id="numOfCompanies">
                    <td class="align-middle">
                        <?php
                            $comps_array = array();
                            array_push($comps_array, $jobs_array[0]->getCompany());
                            for($x = 0; $x < sizeof($jobs_array); $x++)
                            {
                                $checkVal = 0;
                                for($y = 0; $y < sizeof($comps_array); $y++)
                                {
                                    if($jobs_array[$x]->getCompany() == $comps_array[$y])
                                    {
                                        $checkVal++;
                                    }
                                }
                                if($checkVal == 0)
                                {
                                    array_push($comps_array, $jobs_array[$x]->getCompany());
                                }
                            }
                            echo sizeof($comps_array);
                        ?>
                    </td>
                </div>
                <div class="col-1"></div>
            </div>
            <div class="row" id="space10"></div>
        </div>
    </div>
    <div class="row" id="space30"></div>
            
            <div class="row">
                <div class="col-12" id="jobList">
                    <div>
                        <?php
                        $url_software = "assets/software.jpg";
                        $url_chemical = "assets/chemical.jpg";
                        $url_mechanical = "assets/mechanical.jpg";
                        $url_electronic = "assets/electronics.jpg";
                        $url_bck;
                        $sql = "SELECT * FROM jobs_new";
                        $result = mysqli_query($conn, $sql);
                        $resultCheck = mysqli_num_rows($result);
                        foreach($jobs_array as $job){
                            if($job->getField() == "Software and Technology")
                            {
                                $url_bck = $url_software;
                            }
                            if($job->getField() == "Mechanical Engineering")
                            {
                                $url_bck = $url_mechanical;
                            }
                            if($job->getField() == "Chemical Engineering")
                            {
                                $url_bck = $url_chemical;
                            }
                            if($job->getField() == "Electronic Engineering")
                            {
                                $url_bck = $url_electronic;
                            }
                            echo "  <div class='row' style='height: 40px; background-color: #5f0776;'><div class='col-12' style='text-align: center;color:white;'><p>" . $job->getCompany() . "</p></div></div>
                                    <div class='row' style='color:white; background-image: url(".$url_bck.");'>
                                            <div class='col-6' style='background-color:rgba(0, 0, 0, 0.5);'>
                                                    <div class='row'>
                                                        <div class='col-12'><p style='font-weight: bold;text-decoration: underline;'>Job Title</p><p>" . $job->getTitle() . "</p></div>
                                                    </div>
                                                    <div class='row'>
                                                        <div class='col-12'><p style='font-weight: bold;text-decoration: underline;'>Location/County</p><p>" . $job->getLocation() . "</p></div>
                                                    </div>
                                                    <div class='row'>
                                                        <div class='col-12'><p style='font-weight: bold;text-decoration: underline;'>Salary</p><p>£" . $job->getSalary() . "</p></div>
                                                    </div>
                                            </div>
                                            <div class='col-6' style='background-color:rgba(0, 0, 0, 0.5);'><p style='font-weight: bold;text-decoration: underline;'>Job Description</p><p>" . $job->getDescription() . "</p></div>
                                    </div><hr><br><br>";
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <script>
            function order() {
                var field = document.getElementById("fieBox").textContent;
                var type = document.getElementById("typBox").textContent;
                var salary = document.getElementById("salBox").textContent;
                var location = document.getElementById("locBox").textContent;
                var orderBy = document.getElementById("ordBox").textContent;
                var xhttp;
                console.log("function was called");
                $.ajax({
                    url: 'jobs_filtering.php', //This is the current doc
                    type: "POST",
                    data: ({field: field, type:type, salary:salary, location:location, orderBy:orderBy}),
                    success: function(data){
                        var filtered_jobs = JSON.parse(data);
                        console.log("filtering successful");

                        var node = document.getElementById('jobList').innerHTML = "";
                        var software = "assets/software.jpg";
                        var chemical = "assets/chemical.jpg";
                        var mechanical = "assets/mechanical.jpg";
                        var electronic = "assets/electronics.jpg";
                        var bck;
                        for(i = 0; i < filtered_jobs.length; i++)
                        {
                            if(filtered_jobs[i].field == "Software and Technology")
                            {
                                bck = software;
                            }
                            if(filtered_jobs[i].field == "Mechanical Engineering")
                            {
                                bck = mechanical;
                            }
                            if(filtered_jobs[i].field == "Chemical Engineering")
                            {
                                bck = chemical;
                            }
                            if(filtered_jobs[i].field == "Electronic Engineering")
                            {
                                bck = electronic;
                            }

                            var node = document.getElementById('jobList').innerHTML += "<div class='row' style='height: 40px; background-color: #5f0776;'><div class='col-12' style='text-align: center;color:white;'><p>" + filtered_jobs[i].company + "</p></div></div><div class='row' style='color:white; background-image: url("+ bck +");'><div class='col-6' style='background-color:rgba(0, 0, 0, 0.6);'><div class='row'><div class='col-12'><p style='font-weight: bold;text-decoration: underline;'>Job Title</p><p>" + filtered_jobs[i].title + "</p></div></div><div class='row'><div class='col-12'><p style='font-weight: bold;text-decoration: underline;'>Location/County</p><p>" + filtered_jobs[i].location + "</p></div></div><div class='row'><div class='col-12'><p style='font-weight: bold;text-decoration: underline;'>Salary</p><p>£" + filtered_jobs[i].salary + "</p></div></div></div><div class='col-6' style='background-color:rgba(0, 0, 0, 0.6);'><p style='font-weight: bold;text-decoration: underline;'>Job Description</p><p>" + filtered_jobs[i].description + "</p></div></div><hr><br><br>";
                        }

                        //calc number of jobs found
                        document.getElementById("numOfJobs").innerHTML = filtered_jobs.length;

                        //calc average salary
                        var total = 0;
                        for(i = 0; i < filtered_jobs.length; i++){
                            total = total + parseInt(filtered_jobs[i].salary);
                        }
                        var output = total / filtered_jobs.length;
                        output = Math.round(output);
                        document.getElementById("average_sal").innerHTML ="£" + output;

                        //calc number of companies found
                        var comps_array = [];
                        
                        if(filtered_jobs.length == 0)
                        {
                            document.getElementById("average_sal").innerHTML ="£" + 0;
                        }
                        else
                        {
                            comps_array.push(filtered_jobs[0]);
                            for(var x = 0; x < filtered_jobs.length; x++)
                            {
                                var checkVal = 0;
                                for(var y = 0; y < comps_array.length; y++)
                                {
                                    if(filtered_jobs[x].company == comps_array[y].company)
                                    {
                                        checkVal++;
                                    }
                                }
                                if(checkVal == 0)
                                {
                                    comps_array.push(filtered_jobs[x]);
                                }
                            }
                        }
                        document.getElementById("numOfCompanies").innerHTML = comps_array.length;
                    }
                });
            }
            function clearTxt() {
                var field = document.getElementById("fieBox").innerHTML = "";
                var type = document.getElementById("typBox").innerHTML = "";
                var salary = document.getElementById("salBox").innerHTML = "";
                var location = document.getElementById("locBox").innerHTML = "";
                var orderBy = document.getElementById("ordBox").innerHTML = "";
            }
        </script>
    <script src="js/jobs_page.js?version=1"></script>
    </body>