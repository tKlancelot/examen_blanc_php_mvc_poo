<div class="d-flex justify-content-around bg-light border rounded">
    <a class='pl-2' href="../../../exam_blanc_php_poo_mvc_tarik/index.php?controller=default&action=home">
        <button style="border-radius:50%;width:50px;height:50px;font-size:1.4rem;" type='submit' class="btn btn-success  mt-2 mb-2 text-uppercase"><i class="fas fa-home"></i></button>
    </a>
    <a class='pl-2' href="../../../exam_blanc_php_poo_mvc_tarik/index.php?controller=raviole&action=addForm">
        <button style="border-radius:50%;width:50px;height:50px;font-size:1.4rem;" type='submit' class="btn btn-primary  mt-2 mb-2 text-uppercase">
            <i class="far fa-plus-square"></i>
        </button>
    </a>
    <a class='pl-2' href="#">
        <button style="border-radius:50%;width:50px;height:50px;font-size:1.4rem;" type='submit' class="btn btn-warning text-white mt-2 mb-2 text-uppercase"><i class="fas fa-info-circle"></i></button>
    </a>

    <a class='pl-2' href="#">
        <button style="border-radius:50%;width:50px;height:50px;font-size:1.4rem;color:white;padding-top:0.6rem;background-color:<?php echo $color?>" type='submit' class="btn mt-2 mb-2 text-uppercase">
            <?php
            echo $data;
            ?>
        </button>
    </a>

</div>

