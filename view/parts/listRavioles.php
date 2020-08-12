<div class="bg-white scroller">
        <table class="table border rounded">
            <thead class="text-uppercase text-light">
            <tr>
                <th>id</th>
                <th class="text-left">
                    <span>titre&emsp;</span>
                    &emsp;<a class='tri' href="../../../exam_blanc_php_poo_mvc_tarik/index.php?controller=default&action=orderBy"><i class="fas fa-caret-down"></i></a>
                    &emsp;<a class='tri' href="../../../exam_blanc_php_poo_mvc_tarik/index.php?controller=default&action=orderByDesc"><i class="fas fa-caret-up"></i></a>
                </th>
                <th>
                    <span>ingredient&emsp;</span>
                    &emsp;<a class='tri' href="../../../exam_blanc_php_poo_mvc_tarik/index.php?controller=default&action=orderByIngredientAsc"><i class="fas fa-caret-down"></i></a>
                    &emsp;<a class='tri' href="../../../exam_blanc_php_poo_mvc_tarik/index.php?controller=default&action=orderByIngredientDesc"><i class="fas fa-caret-up"></i></a>
                </th>
                <th>photo</th>
                <th class="text-center" colspan="3">options</th>
            </tr>
            </thead>
            <tbody>
        <tr><?php foreach ($ravioles as $raviole){?>
            <td><?=$raviole->getId();?></td>
            <td class="text-left"><?=$raviole->getTitle();?></td>
            <td><?=$raviole->getIngredient();?></td>
            <td width="10%"><img width=50% height=40px src="assets/<?=$raviole->getPicture();?>"</td>
            <td class=""><a href="../../../exam_blanc_php_poo_mvc_tarik/index.php?controller=raviole&action=delete&id=<?php echo $raviole->getId()?>"><i class="fas fa-trash"></i></a></td>
            <td class=""><a href="../../../exam_blanc_php_poo_mvc_tarik/index.php?controller=raviole&action=updateForm&id=<?php echo $raviole->getId()?>"><i class="far fa-edit"></i></a></td>
            <td class=""><a title="voir les details" href="../../../exam_blanc_php_poo_mvc_tarik/index.php?controller=raviole&action=displayOne&id=<?php echo $raviole->getId()?>"><i class="fas fa-info-circle"></i></a></td>
        </tr>
        <?php
        }?>
        </tbody>
        </table>
</div>
