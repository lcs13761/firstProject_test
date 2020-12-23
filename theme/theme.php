<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta nome="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="view/style.css"/>
    
</head>
<body>
    <div class="container">
        <div class="main_header_logo">
            <h2>SAMBATECH</h2>
        </div>
    <div class="banner">
        <span>
        <img src="videos-sambatech.png" alt="sambatech">
        </span>
        <h1 class="tt">[infográfico]</h1> 
        <h1 class="tt2">O novo produtor<br>de conteúdo:</h1>
        <h3><br>Como as pessoas têm se adaptado às<br>mudanças online</h3>
    </div> 
    <article class = "conteudo">
    <span class="conteudo1">
        <p> O mercado de videos online vem passando por mudanças <br>significativas na monetizaçao, na segurança da informação e <br>
        principalmente com a crescente exigência do público. Se<br>você é, ou pretende se tornar um produtor de conteúdo,<br>
        deve estar atento a tendências de mercado e as<br>oprtunidades para sair na frente e se destacar! </p>
    </span>
    <span class="conteudo2"><p> infográfico, você vai se atualizar sobre o futuro dos<br>produtores de conteúdo, e como as mudanças e
    tecnologias<br>vem buscando impacto no mercado de videos online<br><br>Preencha o formulário ao lado para receber o material!</p></span>
    </article>
    <div class="acessar_cadastro">
        <h2>FAÇA O DOWNLOAD GRÁTIS AQUI!</h2>
        <form class="formulario" id="formulario" method="POST" action =  "index.php" >
            <article clas="cpform">
            <div class="campo">
                <label class="aolado">Nome*<br></label>
                <input type="text" id="nome" name="nome"  required onkeypress="return Apstring(event,this);" />
<script>
                function Apstring(e, t) {//teste de entrada de dados aceitando apenas string onde verificar o campo clicado e ao digita a informacao e bloqueado  digita numeros
                try {
        if (window.event) {
            var charCode = window.event.keyCode;
        } else if (e) {
            var charCode = e.which;
        } else {
            return true;
        }
        if ((charCode > 64 && charCode < 91) || (charCode > 96 && charCode < 123) || (charCode == 32 ))
            return true;
        else
            return false;
    } catch (err) {
        alert(err.Description);
    }
}
</script>
            </div>
            <div class="campo">
                <label>Email*<br></label>
                <input type="email"  name="email"  required/>
            </div>
            <div class="campo">
                <label class="aolado2">Telefone*<br></label>
                <input type="number" name="telefone" required/>
            </div>
            <div class="campo">
                <label>Empresa*<br></label>
                <input type="text" name="empresa" required/>
            </div>
            </article>
        <p class="optd">Você ou a sua empresa produzem conteúdo em video?*<br></p>
        <select name="protudo" required>
        <option></option>
        <option name="protudo" value="M_empresa">Minha Empresa</option>
        <option name="protudo" value="Eu_prod">Produção Pessoal</option>
        </select> 
        <div class="escolha">
            <p>Como você ou sua empresa alcançam sua audiência ou clientes?*</p>
            <input class="test"type="checkbox" id="tipo1" name="tipo" value="tipo1" onclick="toggle(1,'tipo')">
            <label for="tipo1">Ainda não tenho audiência e clientes</label><br/>
            <input class="test"type="checkbox" id="tipo2" name="tipo" value="tipo2"onclick="toggle(2,'tipo')">
            <label for="tipo2">Youtube</label><br/>
            <input class="test"type="checkbox" id="tipo3" name="tipo"value="tipo3" onclick="toggle(3,'tipo')">
            <label for="tipo3">Lista de Email(Leads)</label><br/>
            <input class="test"type="checkbox" id="tipo4" name="tipo" value="tipo4" onclick="toggle(4,'tipo')">
            <label for="tipo4">Presencialmente</label><br/>
            <input class="test"type="checkbox" id="tipo5" name="tipo"value="tipo5" onclick="toggle(5,'tipo')">
            <label for="tipo5">Redes Sociais</label><br/>
           

        <script>
            function toggle(which,tipo){
                var counter =1;
                var checkbox=document.getElementById(tipo+counter);
                while(checkbox){
                    if(counter==which){

                }else{
                    checkbox.checked=false;
                }
                counter++;
                checkbox=document.getElementById(tipo+counter);
            } 
        }   
        var inputs = document.querySelectorAll('input');

            function verificar() {
            return [].filter.call(inputs, function (input) {
        return input.checked;
    }).length;
}
        </script>
    </form>

    
    <button type="submit" class="button" >Acessar o material gratuito</button>
 
    
    <script> document.querySelector('button').addEventListener('click', function () {
        var valido = verificar();
    if (!valido) alert('Preencha todos os campos'); 
    });
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
    </script>
    </div>
</body>

</html>
