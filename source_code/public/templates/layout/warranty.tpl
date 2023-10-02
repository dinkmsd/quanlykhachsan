	{loadModule name=header}

	<div class="content">	
		<div class="wrap">
			<div class="left-content">
				
				<!--Module category -->
				{loadModule name=product task=category}
				<!--Module category -->
				
				<!--Module advert -->
				{loadModule name=download task=home}				
				<!--Module advert -->
				
				<!--Module advert -->
				{loadModule name=partner task=home}				
				<!--Module advert -->

				<!--Module support -->
				{loadModule name=hitstat}
				<!--Module support -->
				
				<!--Module ADVERT -->
				{loadModule name=ad task=left}				
				<!--Module ADVERT -->
				
			</div>
			<div class="center-content">
				{loadModule name=warranty task=$smarty.get.task}				
			</div>
			<div class="right-content">
				<!--Module cart -->
				{loadModule name=cart task=defaultCart}				
				<!--Module cart -->
				
				<!--Module support -->
				{loadModule name=support}
				<!--Module support -->
				
				<!--Module news -->
				{loadModule name=news task=latest}
				<!--Module news -->
				
				<!--Module rate -->
				{loadModule name=ad task=rate}
				<!--Module rate -->
				
				<!--Module poll -->
				{loadModule name=poll task=default}				
				<!--Module poll -->
				
				<!--Module advert -->
				{loadModule name=member task=home}				
				<!--Module advert -->
				
				<!--Module ADVERT -->
				{loadModule name=ad task=right}
				<!--Module ADVERT -->
				
			</div>
			<div class="clr"></div>
			
			{loadModule name=footer}