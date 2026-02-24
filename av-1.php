<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    class Carro {

    //Atributos
    public $marca;
    public $modelo;
    public $ano;
    public $cor;
    public $velocidade = 0;

    //Funções
    
    public function marca() {
        echo "Marca do carro é: " . $this->marca;
    }
    
    public function acelerar() {
        $this->velocidade += 10;
        echo " O carro acelerou. Velocidade: " . $this->velocidade . "Km/h  <br>";
        }

    public function frear() {
        if ( $this->velocidade >= 10){
            $this->velocidade -= 10;
        }
        echo " O carro freou. Velocidade: " . $this->velocidade . "Km/h  <br>";
    }

}
    //Objeto
    $meuCarro = new Carro();
    $meuCarro->marca = "Mercedes <br>";

    //Métodos
    $meuCarro->marca();
    $meuCarro->acelerar();
    $meuCarro->acelerar();
    $meuCarro->frear();
    
    
    ?>

</body>
</html>