<?php
Class Pagination {
	
	function OffsetPagination($totalPage , $recentPage , $offset = 5,  $prevClass = null , $nextClass = null , $prevOfClass = null, $nextOfClass = null)
	{	
		if($totalPage == 0){
			return;
		}

		$link = $_SERVER['PHP_SELF'];
		$totalOffset = ceil($totalPage / $offset) - 1;
		$nowOffset   = ceil($recentPage / $offset) - 1;
		
		if($nowOffset >= 1){
			$prevOffset = $recentPage - $offset;
			echo '<li><a href="'.$link.'?p='.$prevOffset.'" class="'.$prevOfClass.'"></a></li>';
		}

		if($recentPage > 1 && $totalPage > 1){
			$prevPage = $recentPage - 1;
			echo '<li><a href="'.$link.'?p='.$prevPage.'" class="'.$prevClass.'"></a></li>';
		}

		for ($i = 1 ; $i <= $offset ; $i++) { 

			$p = $i + ($offset * $nowOffset);
			if($p == $recentPage){
				echo '<li><a href="javascript:;" class="pagefocus">'.$p.'</a></li>';
			}else{
				echo '<li><a href="'.$link.'?p='.$p.'">'.$p.'</a></li>';
			}

			if($p == $totalPage)break;
			
		}

		if($recentPage < $totalPage){
			$nextPage = $recentPage + 1;
			echo '<li><a href="'.$link.'?p='.$nextPage.'" class="'.$nextClass.'"></a></li>';
		}

		if($nowOffset < $totalOffset){
			$nextOffset = $recentPage + $offset;
			echo '<li><a href="'.$link.'?p='.$nextOffset.'" class="'.$nextOfClass.'"></a></li>';
		}
	}
}
?>