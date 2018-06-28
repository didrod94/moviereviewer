<!-- Search bar -->
<div class="container">
    <form action="searchGenre.php" method="post">
        <div class = "btn-group">
            <select class="form-control" name="search_genre" placeholder="장르">
                <option value="Action">액션</option>
                <option value="Romance">로맨스</option>
                <option value="Drama">드라마</option>
                <option value="Animation">애니메이션</option>
                <option value="Crime">범죄</option>
                <option value="Mystery">미스터리</option>
            </select>
            <span class = "input-group-btn">
                <input type="submit" class="btn btn-secondary" name="submit" value="GO">
            </span> 
        </div>
    </form>
</div>