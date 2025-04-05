
<ul>
{foreach $users as $user}
    <li>{$user['name']} - {$user['email']}</li>
{/foreach}
</ul>

<div class="pagination">
{if $currentPage > 1}
    <a href="?page={$currentPage-1}">Poprzednia</a>
{/if}

{for $i=1 to $totalPages}
    <a href="?page={$i}" {if $currentPage == $i}class="active"{/if}>{$i}</a>
{/for}

{if $currentPage < $totalPages}
    <a href="?page={$currentPage+1}">Następna</a>
{/if}
</div>
