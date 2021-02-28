<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossorigin="anonymous">
    <title>Music</title>
</head>

<body>

    <header id="header">
        <div class="headphones">
            <i class="fas fa-headphones"></i>
            <p class="brand"> Music </p>
        </div>

        <ul>
            <li> <a href="#"> Home </a></li>
            <li> <a href="#trending"> Trendig </a> </li>
        </ul>
    </header>




    <section class="apresentação">

        <div>
            <h2 class="brand">Music</h2>
            <p class="subtitle">
                At the starting of the week /
                At summit talks you'll hear them speak /
                It's only Monday /
                Negotiations breaking down / 
                See those leaders start to frown /
                It's sword and gun day. /
                    /
                Tomorrow never comes until it's too late

            </p>

        </div>






    </section>

    <section class="trending">
        <div id="trending" class="divtitles">
            <h1 class="trending">Trending</h1>
            <h4 class="subtrending">As <strong> 20 musicas </strong> mais tocadas no mundo, segundo o <strong>spotify:</strong> </h4>
        </div>

        <div class="content">

            <div class="tabela">
                <table>
                    <tbody>
                        <tr>
                            <th>Posição</th>
                            <th>Música</th>
                            <th>Artista</th>
                            <th>Streams</th>
                            <th>Url</th>
                        </tr>

                        <?php
                        $file = file("./Data/regional-global-daily-latest.csv");
                        foreach ($file as $key =>  $elemento) {
                            if ($key <= (20 - 1)) {
                                $cut_data = explode(",", $elemento);
                                echo "
                        <tr> 
                            <td>{$cut_data[0]}</td>
                            <td>{$cut_data[1]}</td>
                            <td>{$cut_data[2]}</td>
                            <td>{$cut_data[3]}</td>
                            <td> <a class='spotify' target='_black' href='{$cut_data[4]}'> Open on spotify </a> </td>
                        
                        
                        
                        <tr>";
                            }
                        }

                        ?>
                    </tbody>

                </table>
            </div>

            <div class="discfolder">
                <img class="disc" draggable="FALSE" src="/Assets/discfolders/0330a2aa58bff83b373f5977d175e3c4.jpg" alt="disc">
                <img class="disc" draggable="FALSE" src="/Assets/discfolders/20464851_10156885449742588_1280545232_o.jpg" alt="disc">
                <img class="disc" draggable="FALSE" src="/Assets/discfolders/38472215.jpg" alt="disc">
                <img class="disc" draggable="FALSE" src="/Assets/discfolders/f9949e4-Capa-do-album-thriller-1024x1024.webp" alt="disc">
            </div>




        </div>


    </section>


    <footer>
        <div class="brandfooter">
            <i class="fas fa-headphones footerlogobrand"></i>
            <p class="brandfooter"> Music </p>

        </div>
        <div class="social">
            <h1 class="titlemedias"> Social Medias </h1>
            <div class="logomedias">
                <i class="fab fa-instagram"></i>
                <i class="fab fa-whatsapp"></i>
                <i class="fab fa-facebook"></i>
            </div>
        </div>

        <div class="company">
            <h1 class="titlemedias"> Empresa </h1>
            <div class="itens">
                <p class="iten" > Fale Conosco</p>
                <p class="iten"> Termos de uso</p>
                <p class="iten"> Privacidade</p>
                <p class="iten"> Reportar erro</p>
            </div>



        </div>

    </footer>

</body>

<script>
    function typeWrite(elemento) {
        const textoArray = elemento.innerHTML.split('');
        elemento.innerHTML = ' ';
        textoArray.forEach(function(letra, i) {

            setTimeout(function() {
                if (letra === `/`) {
                    elemento.innerHTML += "</br>"

                } else if (letra === "#") {
                    elemento.innerHTML += `<div class="singer">Michael Jackson</div>`
                } else {
                    elemento.innerHTML += letra;
                }

            }, 75 * i)

        });
    }
    const titulo = document.querySelector(".subtitle");
    typeWrite(titulo);
</script>

</html>