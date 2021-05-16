<main class="main-entry">
    <h2 id="enterNumber">Enter a Number: </h2>
    <!-- BEM -->
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="GET" class="main-entry__form">
        <input type="text" class="main-entry__input" id="num" name="num" aria-labelledby="enterNumber" maxlength="2" autofocus required>

        <button class="main-entry__button">Go</button>
    </form>
</main>