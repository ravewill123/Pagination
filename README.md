# PHP Pagination Class #
----------

A Class for add pagination on page.


## Functions ##

1. OffsetPagination

	To add Page with offset setting.

	Params: 

	totalpage : total page of data collection.
	nowpage : recent page of pagination.
	prevclass: prevpage's style.
	netxclass: nextpage's style.


## Use it! ##

    $p = new Pagination;
	$p -> OffsetPagination([TotalPage],[NowPage]);

Will output -

    
	<li><a href="/pagination/test.php?p=1">1</a></li>
	<li><a href="/pagination/test.php?p=2">2</a></li>
	<li><a href="/pagination/test.php?p=3">3</a></li>
	<li><a href="/pagination/test.php?p=4">4</a></li>
	<li><a href="/pagination/test.php?p=5">5</a></li>
