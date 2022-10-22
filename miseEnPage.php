<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- link font css -->
    <link rel="stylesheet" href="style.css">
    <!-- link font boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- link font awesone -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Ecole ARAHMA</title>
</head>

<body>
    <!-- container menu / sans boostrap -->
    <div class="containerMenu ">
        <span>
            <img class="imgLogo" src="images/ecole_reussite.png" alt="logo ecole de la réussite">
        </span>
        <span class="menu">
            <button class="boutonMenu"> <a href="pageAcceuil.php">Acceuil </a> </button> <br>
            <button class="boutonMenu"> <a href="pageConnexion.php">Page de connexion</a> </button><br>
            <button class="boutonMenu"> <a href="pageInscription.php">Page d'inscription</a> </button><br>
            <button class="boutonMenu"> <a href="maPage.php">Ma page</a> </button><br>
            <button class="boutonMenu"> <a href="pageDeconnexion.php">Déconnexion</a> </button>
        </span>
    </div>
    <!-- container Form  / BOOSTRAP et CSS  -->
    <div class="containerForm">
        <!-- Image header -->
        <div>
            <img src="images/Iheader.png" class="position-absolute" alt="...">
        </div>
        <!-- formulaire  -->
        <div class="formulaireCSS container position-relative ">
            <!-- card(carte) header -->
            <div class="card-header text-center  text-white bg-primary  ">
                <h3> CONNEXION</h3>
            </div>
            <!-- card(carte) body -->
            <div class="card-body">
                <form action="">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-user"></i></span>
                        <input type="text" class="form-control" placeholder="Entrez votre Email" autocomplete="off" name="user" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1"><i class="fa-sharp fa-solid fa-key"></i></i></span>
                        <input type="password" class="form-control" placeholder="Entrez votre mot de passe" autocomplete="off" name="password" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                    <div class="form-group">
                        <input type="submit" name="envoyer" value="Connecter">
                    </div>
                </form>
            </div>
            <!-- card(carte) footer -->
                <div class="card-footer">
                    Je n'ai pas de compte.  <a href="pageInscription.php"> M'inscrire?</a> 
                </div>
        </div>


    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>