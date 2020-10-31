function getLatLongUsingPincode($zipcode){
        try{
            $url ="https://maps.googleapis.com/maps/api/geocode/json?address=".$zipcode.",IN&key=&sensor=false";
            $details=file_get_contents($url);
            $result = json_decode($details,true);
            $lat = $lng = 0;
            $lat=$result['results'][0]['geometry']['location']['lat'];
        
            $lng=$result['results'][0]['geometry']['location']['lng'];
            return ['lat'=>$lat,'lng'=>$lng];
        }
        catch(\Exception $e){
            return ['lat'=>0,'lng'=>0];
        }
    }
