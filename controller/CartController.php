<?php

class CartController extends Controller{

    private $product = null;

    protected function init(){
        $this->product = new ProductModels();
    }

    public function test(){
        $params     = $this->_request->getParams();
        $id         = $params['id'] ?? null;
        $product    = $this->product->where(['id' => $id])->one();

        if(empty($product)){
            return $this->_request->json([
               'message' => 'Product not found!'
            ], 206);
        }

        return $this->_request->json([
            'data' => $params
        ]);
    }

}