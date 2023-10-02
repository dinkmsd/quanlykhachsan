	{loadModule name=header}

    <div class="colLeft fl">
    {loadModule name=cart task=$smarty.get.task}
    </div>
    <div class="colRight fr">
    {loadModule name=cart task=price}
    {loadModule name=support}
    </div>
    			
			{loadModule name=footer}