<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class nomina extends CI_Controller {
    
    function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
    }

    public function index()
    { 
        $this->load->model("nomina_mdl");        
        try {
            $datos = $this->nomina_mdl->getAll();
        } catch(Exception $e){
            ToJSONMsg("ERR", $e->getMessage());
            return;
        }
      @$objView->datos = $datos;
      $this->load->view('nomina/index',$objView );
      
    }

    
    public function guardar(){
        $this->load->model("nomina_mdl");
        if ( !empty($_FILES['excel_tados']['tmp_name']) ){
             $strFilePath = $_FILES['excel_tados']['tmp_name'];
        } 
       
        $arrUsuarios = $this->_readFile($strFilePath);
       
        foreach ($arrUsuarios as  $usuario) {           
              if( (int)($usuario['valor']) ){
               $usuario['fecha']=$_POST['fecha'];
               try {
                    $id_competidor= $this->nomina_mdl->addRow($usuario);
                } catch (exception $e){
                    ToJSONMsg("ERR", $e->getMessage());
                    return;
                }    
        
            }
            };
             $this->load->view('index');

        }

   public function generoM(){
        $this->load->model("nomina_mdl"); 
         $objParams->arrWhere[] = "genero = 'M' ";       
        try {
            $datos = $this->nomina_mdl->getAll( $objParams);
        } catch(Exception $e){
            ToJSONMsg("ERR", $e->getMessage());
            return;
        }
      @$objView->datos = $datos;
      $this->load->view('nomina/index',$objView );
    }

     public function generoF(){
        $this->load->model("nomina_mdl"); 
         $objParams->arrWhere[] = "genero = 'F' ";       
        try {
            $datos = $this->nomina_mdl->getAll( $objParams);
        } catch(Exception $e){
            ToJSONMsg("ERR", $e->getMessage());
            return;
        }
      @$objView->datos = $datos;
      $this->load->view('nomina/index',$objView );
    }
    

 


    private function _readFile( $strFilePath )
    {
        require_once(APPPATH . '/libraries/ExcelReader.php');
        try {

            $objReader = new allusExcelReader();

            $arrConfig['strFilePath'] = $strFilePath;

           $arrConfig['arrFieldNames'] = array(
                'cedula',
                'nombre',
                'apellidos',
                'genero',
                'valor'                
            );

            $objReader->setConfig($arrConfig);

            $arrData = $objReader->actionReadFile();

        } catch ( Exception $e ) {
            throw $e;
        }
            return $arrData;
        } 
  
}
