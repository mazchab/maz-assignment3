<div class="container-fluid" style="display:inline"> 
    
    <div class="row" style="padding-left:40px; padding-right:40px">

        <div class="col-6">


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
                        
                    <div class="p-4 border-bottom mb-4" style="background-color:white; border-radius:30px; color:grey; padding-right:50px; padding-top:200px;">

                        <div style="font-family: 'Titillium Web', sans-serif"><?= $item->shortdef[0] ?></div>

                    </div>

                <? } ?>
                <? } ?>
        </div>

        

    </div>
</div>
