<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Contact Wood-info</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="style.css" />
    <script src="main.js"></script>


     <!-- css Bootstrap -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!-- JS bootstrap -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

</head>
<body>
    <?php
        include 'include/navbar.php'
    ?>
    <?php
        include 'include/header.php'
    ?>
    <br>
    <h1>Contact</h1>



    <form action="send_form.php" method="POST">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="inputname"><h3>Votre nom :</h3></label>
                            <input required type="text" name="name" class="form-control" id="inputname" placeholder="Votre nom"
                            value="<?php echo isset($_SESSION['inputs']['name'])? $_SESSION['inputs']['name'] : ''; ?>">
                        </div><!--/*.form-group-->
                    </div><!--/*.col-md-4-->
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="inputname2"><h3>Votre prenom :</h3></label>
                            <input required type="text" name="name2" class="form-control" id="inputname2" placeholder="Votre prenom"
                            value="<?php echo isset($_SESSION['inputs']['name2'])? $_SESSION['inputs']['name2'] : ''; ?>">
                        </div><!--/*.form-group-->
                    </div><!--/*.col-md-4-->
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="inputphone"><h3>Votre numéro de Téléphone :</h3></label>
                            <input required type="tel" name="phone" class="form-control" id="inputphone" placeholder="Votre numero de telephone" pattern="^((\+\d{1,3}(-| )?\(?\d\)?(-| )?\d{1,5})|(\(?\d{2,6}\)?))(-| )?(\d{3,4})(-| )?(\d{4})(( x| ext)\d{1,5}){0,1}$"
                             value="<?php echo isset($_SESSION['inputs']['phone'])? $_SESSION['inputs']['phone'] : ''; ?>">
                        </div><!--/*.form-group-->
                    </div><!--/*.col-md-4-->
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="inputemail"><h3>Votre email :</h3></label>
                            <input required type="email" name="email" class="form-control" id="inputemail" placeholder="Votre email"
                            value="<?php echo isset($_SESSION['inputs']['email'])? $_SESSION['inputs']['email'] : ''; ?>">
                        </div><!--/*.form-group-->
                    </div><!--/*.col-md-4-->
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for="inputSubject"><h3>Sujet :</h3></label>
                            <input type="text" name="subject" class="form-control " id="inputSubject" placeholder="Sujet"
                            value="<?php echo isset($_SESSION['inputs']['subject'])? $_SESSION['inputs']['subject'] : ''; ?>">
                        </div><!--/*.form-group-->
                    </div><!--/*.col-md-4-->
                    <div class="col-xs-12">
                        <div class="form-group" >
                            <label for="inputmessage"><h3>Votre message :</h3></label>
                            <textarea required id="inputmessage" name="message" class="form-control" rows="13" style="background-color: white" placeholder="Votre message ici ..." 
                            value="<?php echo isset($_SESSION['inputs']['message'])? $_SESSION['inputs']['message'] : ''; ?>"></textarea>
                        </div><!--/*.form-group-->
                    </div><!--/*.col-md-12-->
                    <div class="col-lg-12">
                        <div class="checkbox">
                            <label for="checkspam">
                            <input type="checkbox" name="antispam" id="checkspam"><br><h4>je ne suis pas un spammer</h4>
                            </label>
                        </div>
                    </div><!--/*.col-md-12-->
                    <div class=""col-lg-12>
                    
                    </div>
                    <div class="col-lg-12">
                        <button type='submit' class='btn-lg btn-primary'>Envoyer</button>
                    </div><!--/*.col-md-12-->
                </div><!--/*.row-->
            </form>
        </div><!--/*.container-->


        <?php
            include 'include/footer.php'
        ?>
</body>
</html>