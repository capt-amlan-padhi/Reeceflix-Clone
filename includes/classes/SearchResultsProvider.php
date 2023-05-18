<?php
class SearchResultsProvider{
    private $con, $username;

    public function __construct($con, $username){
        $this->con = $con;
        $this->username = $username;
    }

    public function getResults($inputTest){
        $entities = EntityProvider::getSearchEntities($this->con,$inputTest);
        $html = '<div class="previewCategories noScroll"></div>';
        $html .= $this->getResultHtml($entities);

        return $html.'</div>';
    }

    private function getResultHtml($entities){
        if(sizeof($entities)==0){
            return;
        }

        $entitiesHTML="";
        $previewProvider = new PreviewProvider($this->con,$this->username);

        foreach($entities as $entity){
            $entitiesHTML .= $previewProvider->createEntityPreviewSquare($entity);
        }


        //return $entitiesHTML."<br>";
        return "<div class='category'>
            <div class='entities'>
                $entitiesHTML
            </div>
        </div>";
    }
}
?>