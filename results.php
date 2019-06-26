<div id="layout" data-isotope> 
    <div class="row">

        <div class="col-12">


        <? if (!$_GET["s"]) { ?>

            <!-- IF SEARCH IS NOT PROVIDED ... -->

            <a Please provide a search keyword></a>



            
        <? } else { ?>

            <?

                // CONSTRUCT THE API CALL

                $s = $_GET["s"];
                $app_key = "1a195bed-4521-4c2d-a6c3-a5fc1d8ea85b";

                $url = "https://dictionaryapi.com/api/v3/references/medical/json/{$s}?key={$app_key}";

                $ch = curl_init();

                curl_setopt($ch, CURLOPT_URL, $url);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');

                $result = curl_exec($ch);
                if (curl_errno($ch)) {
                    echo 'Error:' . curl_error($ch);
                }
                curl_close ($ch);

                $result = json_decode($result);

                // ANALYZE THE RESULT

                //var_dump($result);

            ?>

            <!-- IDENTIFY THE RESPONSE STRUCTURE AND OUTPUT USING FOREACH LOOP -->

            <? foreach ($result as $item) { ?>
                    <div class="col-6">
                    <div class="p-4 border-bottom mb-4 bg" style="width:auto; background-color:white; border-radius:30px; color:grey">

                        <?

                            // ANALYZE THE RESULT

                            // echo "<pre>";
                            // var_dump($item);
                            // echo "</pre>";

                        ?>
                        
                            <div style="font-family:'Bree Serif'"><?= $item->shortdef[0] ?></div>
                        
                    
                    </div>
            </div>   

                
            
                    
                    

                    


            <? } ?>


        <? } ?>


        </div>

    </div>
</div>
