<!DOCTYPE html>
<html lang="en">
<%-include('partials/head.html')%>
<body>
    <header>  
        <div>
            <img class="logo" src="img/logo.png"> 
            <a href="">HOMBRE</a>
            <a href="">MUJER</a>
            <a href="">NIÑOS</a>
            <a href="">COLECCIONES</a>
            <a href="">MARCAS</a>
            <a href="">DEPORTE</a>
            <form class="buscarForm" action="" method="post">
                <input class="textbox" type="text" name="articulo" value="Buscar">
                <input class="button" type="submit" value="Buscar">
            </form>
        </div> 
    </header>

    <section>
        <h2>Novedades</h2>
        <article>
            <br>
            <h4>Tenis Forum 84 Hi</h4>
            <img src="img/tenis1.jpg" alt="" class="imgCatalogo">
            <h5>$2,999</h5>
        </article>

        <article>
            <br>
            <h4>Tenis Forum Low</h4>
            <img src="img/tenis2.jpg" alt="" class="imgCatalogo">
            <h5>$2,199</h5>
        </article>

        <article>
            <br>
            <h4>Tenis U_Path Run</h4>
            <img src="img/teni3.jpg" alt="" class="imgCatalogo">
            <h5>$1,399.30</h5>
        </article>
    </section>

    <section>
        <article>
            <br>
            <h4>Chamarra SST Primeblue</h4>
            <img src="img/chamarra.jpg" alt="" class="imgCatalogo">
            <h5>$1,599</h5>
        </article>

        <article>
            <br>
            <h4>Chamarra SST Primeblue</h4>
            <img src="img/chamarra1.jpg" alt="" class="imgCatalogo">
            <h5>$1,599</h5>
        </article>

        <article>
            <br>
            <h4>Pants Deportivos SST Primeblue</h4>
            <img src="img/pants.jpg" alt="" class="imgCatalogo">
            <h5>$1,399</h5>
        </article>
    </section>

    <section>
        <article>
            <br>
            <h4>Pants Deportivos SST Primeblue</h4>
            <img src="img/pants2.jpg" alt="" class="imgCatalogo">
            <h5>$1,399</h5>
        </article>

        <article>
            <br>
            <h4>Mochila Classic Badge of Sport (UNISEX)</h4>
            <img src="img/mochila.jpg" alt="" class="imgCatalogo">
            <h5>$419.30</h5>
        </article>

        <article>
            <br>
            <h4>Playera Designed to Move Estampada</h4>
            <img src="img/camisa.jpg" alt="" class="imgCatalogo">
            <h5>$499<a/h5>
        </article>
    </section>

    <article>
        <p><br></p>
        <section class="contacto" class="contacto" id="cont">
        <h1>CONTACTANOS</h1>

    <form action="registro.php" name="" method="POST">
        <table>
            <tr>
                <td>
                    NOMBRE:
                </td>
                <td>
                    <label for="name"></label>
                    <input type="text" name="nombre" class="textbox" id="name" required />
                </td>
            </tr>
            <tr>
                <td>
                    CORREO:  
                </td>
                <td>
                    <label for="email"></label>
                    <input type="text" name="correo" class="textbox" id="email" required />
                </td>
            </tr>
            <tr>
                <td>
                    TELEFONO:
                </td>
                <td>
                    <label for="number"></label>
                    <input type="text" name="telefono" class="textbox" id="number" required />
                </td>
            </tr>
            <tr>
                <td>
                    MENSAJE:
                </td>
                <td>
                    <label for="mens"></label>
                    <input type="text" name="mensaje" class="textbox" id="mens" required /><BR>
                    <input class="boton" type="submit"  name="Registrarse"value="ENVIAR">
                </td>
            </tr>
        </table>
    </form>
    </section>
    

</body>
</html>