<h1>Product Controller</h1>
<?php
    class ProductController extends BaseController{

        private $productModel;
        public function __construct(){
            $this->loadModel('ProductModel.php');
            // require './Models/ProductModel.php';
            $this->productModel = new ProductModel;

            $this->loadModel('UserModel.php');
            $this->productModel = new ProductModel;

        }
        public function index(){
            $listProductHot = $this->productModel->getListProductHot();
            $listProductNewArrival = $this->productModel->getListProductNewArrival();

            $arrayDatas = [
                'listProductHot' => $listProductHot,
                'listProductNewArrival' => $listProductNewArrival,
                'headingHot'=> 'List Product Hot 100',
                'headingNewArrival' => 'List Product New Arrival 222'
            ];


            //muon the hien views naof thi phai truyen tham so cho view do
            // $nameVariable la gi thi truyen tham so ten do
            return $this->view('product.list_product', $arrayDatas,);
        }
        public function create(){
            return $this->view('product.create_product');
        }
    }


?>

