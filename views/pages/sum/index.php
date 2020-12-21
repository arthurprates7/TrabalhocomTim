<div class="container">

    <form onsubmit="return sum.execute();">
        <div class="form-group">
            <label for="inputPrimeiroNumero">Primeiro Número</label>
            <input type="number" class="form-control" id="inputPrimeiroNumero" aria-describedby="numeroHelp" placeholder="Digite um número">
            <small id="numeroHelp" class="form-text text-muted">Digite um número aqui.</small>
        </div>
        
        <div class="form-group">
            <label for="inputSegundoNumero">Segundo Número</label>
            <input type="number" class="form-control" id="inputSegundoNumero" aria-describedby="numero2Help" placeholder="Digite um número">
            <small id="numero2Help" class="form-text text-muted">Digite outro número aqui.</small>
        </div>

        <div id="resultado"></div>
        
        <div class="text-center">
            <button type="submit" class="btn btn-primary">
            
                Somar
            
            </button>
        </div>
        
    </form>

</div>

<script>

    class Sum{

        execute(){

            let primeiroNumero = parseInt(document.getElementById('inputPrimeiroNumero').value);
            let segundoNumero  = parseInt(document.getElementById('inputSegundoNumero').value);

            let resultado = primeiroNumero + segundoNumero;

            document.getElementById('resultado').innerHTML = resultado;

            return false;

        }

    }

    const sum = new Sum();

</script>