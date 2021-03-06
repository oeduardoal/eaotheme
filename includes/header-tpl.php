<section id="main-header">
    <section class="container">
        <nav id="main-menu">
            <ul>
                <li>
                    <a href="<?php echo get_home_url(); ?>">Home</a>
                </li>
                <li>
                    <?php if(is_home()): ?>
                        <a href="#main-portfolio">Portfolio</a>
                    <?php else: ?>
                        <a href="<?php echo get_permalink( get_page_by_title( 'Portfolio' ) ) ?>">Portfolio</a>
                    <?php endif; ?>
                </li>
                <li>
                    <?php if(is_home()): ?>
                        <a href="#main-clientes-parceiros">Clientes e Parceiros</a>
                    <?php else: ?>
                        <a href="<?php echo get_permalink( get_page_by_title( 'Clientes e parceiros' ) ) ?>">Clientes e Parceiros</a>
                    <?php endif; ?>
                </li>
                <li>
                    <?php if(is_home()): ?>
                        <a href="#main-sobre">Sobre</a>
                    <?php else: ?>
                        <a href="/sobre">Sobre</a>
                    <?php endif; ?>
                </li>
                <li>
                    <a href="#main-contato">Contato</a>
                </li>
            </ul>
        </nav>
        <nav id="main-social">
            <ul>
                <?php
                    $idHome =  get_page_by_title( "Página Inicial" );
                ?>
                <?php if( get_field('facebook', $idHome) ): ?>
                <li>
                    <a href="<?php echo get_field('facebook', $idHome); ?>" target="_blank" >
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 55" xmlns:xlink="http://www.w3.org/1999/xlink" width="57px" height="57px">
                            <image x="0px" y="0px" width="57px" height="57px" xlink:href="data:img/png;base64,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"
                            />
                        </svg>
                    </a>
                </li>
                <?php endif; ?>

                <?php if( get_field('instagram', $idHome) ): ?>
                <li>
                    <a href="<?php echo get_field('instagram', $idHome); ?>" target="_blank" >
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 55" xmlns:xlink="http://www.w3.org/1999/xlink" width="57px" height="57px">
                            <image x="0px" y="0px" width="57px" height="57px" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAADkAAAA5CAMAAAC7xnO3AAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAACvlBMVEX////v9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PTv9PT///8ZmQaQAAAA6HRSTlMACzljhpyur6OPcUoaLH/G+9+aTAYJZs7mwaaVobbY7I4hb+GTTxY4ecX+nx9G3Kc/Aej3gAf9nR7p0iLTyjAPkfZbN+v8fgQ+40H170QVwoc08yqqgeUjA2DxLrz4MolOEt3ZCjWN+owIboU6V4L5v97VtwKsEEWyJFkvR3C+DWzNE4qgUmoRiBxnlqt6KaQOYlprUB3UwPSzu0jwolaSz18F23dCaJg2uFy6kMuXPGS9aXPEVDGZrRgMTerXfJs757R2U8PJVYSLJhmpS0DInnUgJbDkXn3QF+BRM+3M4m3uK6UoqHsn110IjwAAAAFiS0dEAIgFHUgAAAAHdElNRQfiCB8KHBq50D3QAAAEaElEQVRIx42W+0NTZRjHX6DEiZtgk0ARbSTCZs4JTJForTG5jNAoc6BTUAEvGSgXKTK5VAIWiYDNIkVQRAPK0EhCzUv30G7SxW52se+f0eFs5/bujO354ZznfM/zOee87/s8z3kJkbWAwKB77p0SHDxVMS1kOvHblKoZoRBZ2Mz71H5gs8LvZ8MjImfPUSii5kazD5k3/wEfnFoTwcTFPLggVnjUwrh4LRCqWzQZ+NBiJkS/xEDri1RLgYTEJG9cwEzAuGy5/CA0ycAKpTyY8jCQ+ojX7zE9aoT5Mbk7ljRYV6ZPNpaMTCDRU86yIftxH/OXswpYTYtP5CLzSeLL1E8Ba6TS8qV4eq1PkBC7HsgTC0mpyF/nB8i8dT0cG0TXG6Et8AskpHATNm/hr4qsKPYTZGakBFs535CK6G3CrenblwVLTb/jGRG6BqHcXO4EhPWwP1sKGSsTsnbbLgS7X7kb5bxcUYmw8JQqqcXuqUbyc3zM89DWsM4LgIVX9+LFfXKjq0VdBf/0aESxzhTEC8szL63eE8tb3EBewsv89StI2M+cTA7R2u5BI+c2NR94VfeaZaLimNorbMHrfNRBM1qZ0yE4TLzWhnaX0zHb6JqawyGENOANA3GmCh9RiSPMUYc3BUmDJez5rU44325dcLRxE3DMTvYzb87uEsKOw9ZNSA9OeJAnS6F39RN7rw2nWE9MdgB9xARk0WR9MjbyUl8udtIkiUAzKQLqabIYp0Wt6Axi1DT5DvrJUeQTikzK1kpKdYCdNgk5yKRRG6Jp8l0MSJZzOwZpciWTA3GSMJZsxhwJaUEZTWrQRVSsLCE1UEnIteiSI0+gjibfc68DZ4E4K0e+j800GYguCTmEYzSZiHPkPJw02Z2GD0RaxQqE0OQwPiQbgAv0eu7AKrugNaPHTpNnMZ+MGEUNwU0ezMQgX40nE/ARoclRBBFyEZdoklhsKHe131lxpe5MFJMpmBjPZfGycLXy8RWEXr12vHc4GcZEgwcZhE5mANdRUshLbVzl5xxIcNXnJ1zbs30qkNVsDxsxM3nPWRYzcreZPvtc8UXvl9xljbv3TFi9A2cmznpRLnRHZH9FZO1rjPH+XjjZNncDuMGL4bhZKMMZLuEcX3jpYRh2eXWiOTJ8gyvf1nwnte/PRyKmiY9phbHF5RUABQI6lCvX438Q0mXfLeg5PxJhI8KXVY0rdFI7dU1c6cVw8JsjZQlVHZNZhlX82/4ROOQneOEWfhLti+xlsC30C9wyA7ktYuHnXzCq9ANUH4H2tlRqGcXor77fOBeYRot9v8HZ7gNs+h3iHwJnyj+gLU6aDBxjdml/ys5aPLA7wysXGwXcGZO/173aCm3lX7L3qlT5QLz37XFRHaAtb/fYe6/rZ7jOWjvxbhXjPUyS3vk77x++D8WObb3IaGZFjo/5S7++nv1bmw+f/lc3tfpmGpvwu+764ljrqL2aLyoT60CjxeAP5/rq/24PNVzW6frvjlsC5EP+BznYIcpYUIvkAAAAAElFTkSuQmCC"
                            />
                        </svg>
                    </a>
                </li>
                <?php endif; ?>
                <?php if( get_field('vimeo', $idHome) ): ?>
                <li>
                    <a href="<?php echo get_field('vimeo', $idHome) ?>" target="_blank">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 55" xmlns:xlink="http://www.w3.org/1999/xlink" width="57px" height="58px">
                            <image x="0px" y="0px" width="57px" height="58px" xlink:href="data:img/png;base64,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"
                            />
                        </svg>
                    </a>
                </li>
                <?php endif; ?>
                <?php if( get_field('youtube', $idHome) ): ?>
                <li>
                    <a href="<?php echo get_field('youtube', $idHome) ?>" target="_blank">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 55" xmlns:xlink="http://www.w3.org/1999/xlink" width="57px" height="57px">
                            <image x="0px" y="0px" width="57px" height="57px" xlink:href="data:img/png;base64,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"
                            />
                        </svg>
                    </a>
                </li>
                <?php endif; ?>
            </ul>
        </nav>
    </section>
</section>