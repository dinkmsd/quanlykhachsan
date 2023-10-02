	{loadModule name=header}

    <div class="colLeft fl">
    {loadModule name=product task=$smarty.get.task}
    </div>
    <div class="colRight fr">
    {loadModule name=cart task=defaultCart}
    {loadModule name=cart task=price}
    {loadModule name=support}
    </div>
    			
			{loadModule name=footer}