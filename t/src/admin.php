<?php if ($is_admin){
 
        //TODO - roll this into the classes
        $count=0;
	$bullets="";
        $dir=$_SERVER['DOCUMENT_ROOT'].'/../abuse/';
        $d=dir($dir);
        while (false !== ($entry = $d->read())) 
        {
            if ($entry[0]!='.')
            {
		$pid=$entry;
                //does post exist? 
                $file=$_SERVER['DOCUMENT_ROOT'].'/../posts/'.substr($pid,0,1);
 		$file.='/'.substr($pid,1,2);
		$file.='/'.substr($pid,3,2);
 		$file.='/'.substr($pid,5,2);
		$file.='/'.$pid;

                if (file_exists($file))
                {
                    $bullets.= '<li><a href="/'.$pid.'">'.$pid.'</a></li>';
                    $count++;
                }
 		else
		{
		    unlink($dir.$entry);
		}
            
            }
        }
        $d->close();

	echo '<h1>'.t('Abuse').' ('.$count.')</h1><ul>';
        echo $bullets;

	if ($count==0)
		echo '<li>no abuse reports</li>';
        echo '</ul>';

}
?>