 <?php
include 'include/header.php';
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Servie Report
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-gallery"></i> Home</a></li>
        <li class="active">Service Report</li>
      </ol>
    </section>
<section class="content">
     <div class="row"> 
	 <div class="col-md-12"> 
	 <div class="box box-primary table-responsive"> 
	 
		<form method="post" >
			<div class="box-body">
				<div class="col-md-4">
					<div class="form-group">
					  <label for="username">Mobile No</label>
					 <input type="text" name="phone_number" class="form-control" required/>
					
					</div> 
				</div>
				<div class="col-md-4">
					<div class="form-group">
					  <label for="username">Verification Code</label>
					 <input type="text" name="verification_code" class="form-control" required/>
					
					</div> 
				</div>
				<div class="col-md-4">
					<div class="form-group">
					  <label for="username">Verified</label>
					 <input type="text" name="verified" class="form-control" required/>
					
					</div> 
				</div>
			</div>
			
			
				<div class="col-md-4">
					<div class="form-group">
					 <input type="submit" name="add" value="Register" class="btn btn-success" style="margin-top:20px;">
					</div>
				</div>
			</div>
		</form>
		</div>
		</div>
  
	</section>
    <!-- /.content -->
  </div>

<?php

    function setupDatabase()
    {
        // put your database information mentioned above here
        $username = 'root';
        $password = 'root';
        $host = 'localhost';
        $dbname = 'destinaro';

        try {
            $pdo = new PDO("mysql:host=$host;dbname=$dbname",$username,$password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        } catch(PDOException $e) {
            return 'ERROR: ' . $e->getMessage();
        }

        return $pdo;
    }

    // attempts to delete existing entries and
    // save verification code in DB with phone number
    function updateDatabase($phoneNumber, $code)
    {
        $pdo = setupDatabase();
        if (!is_a($pdo, 'PDO')) {
            echo 'PDO is false';
          return $pdo;
        }

        // Assuming US country code for example
        $params = [ 'phoneNumber' => '1' . $phoneNumber ];

        try {
            $stmt = $pdo->prepare("DELETE FROM otp WHERE phone_number=:phoneNumber");
            $stmt->execute($params);

            $params['code'] = $code;
            $stmt = $pdo->prepare("INSERT INTO otp (phone_number, verification_code) VALUES(:phoneNumber, :code)");
            $stmt->execute($params);

        } catch(PDOException $e) {
            return 'ERROR: ' . $e->getMessage();
        }

        return $code;
    }

    function matchVerificationCode($phoneNumber, $code)
    {
        $pdo = setupDatabase();
        if (!is_a($pdo, PDO::class)) {
            echo 'ERROR: PDO is false';
            return 'ERROR: PDO is false '.$pdo;
        }

        $params = [ 'phoneNumber' => $phoneNumber ];

        try {
            $stmt = $pdo->prepare("SELECT * FROM numbers WHERE phone_number=:phoneNumber");
            $stmt->execute($params);

            $result = $stmt->fetch();
            $response = 'unverified';
            if ($result['verification_code'] == $code) {
                $stmt = $pdo->prepare("UPDATE numbers SET verified = 1 WHERE phone_number=:phoneNumber");
                $stmt->execute($params);
                $response = 'verified';
            }

            return $response;

        } catch(PDOException $e) {
            return 'ERROR: ' . $e->getMessage();
        }
    }

    function statusIs($phoneNumber)
    {
        $pdo = setupDatabase();
        if (!is_a($pdo, 'PDO')) {
            echo 'PDO is false';
            return $pdo;
        }

        $params = [ 'phoneNumber' => $phoneNumber ];

        try {
            $stmt = $pdo->prepare("SELECT * FROM numbers WHERE phone_number=:phoneNumber");
            $stmt->execute($params);

            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            if ($result['verified'] == 1) {
                return 'verified';
            }

            return 'unverified';

        } catch(PDOException $e) {
            return 'ERROR: ' . $e->getMessage();
        }
    }


 <?php
include 'include/footer.php';
?>