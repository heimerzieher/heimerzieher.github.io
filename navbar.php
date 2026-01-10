            <nav class="navbar navbar-expand-lg shadow-lg mb-5 rounded">
                <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <?php function makeLink($id, $text) { ?>
                            <?php global $selected; ?>
                            <li class="nav-item">
                                <a class="nav-link<?php if($selected == $id) { ?> active<?php } ?>" aria-current="page" href="<?php echo $id; ?>"><?php echo $text; ?></a>
                            </li>
                            <?php } ?>
                            <?php makeLink('index.html', 'About'); ?>
                            <?php makeLink('research.html', 'Research'); ?>
                            <?php makeLink('teaching.html', 'Teaching'); ?>
                            <?php /* makeLink('pdf/pdf-test.pdf', 'CV'); */ ?>
                            <?php /* makeLink('aoi', 'AOI'); ?>
                            <?php makeLink('email', 'EMAIL'); ?>
                            <?php makeLink('social', 'SOCIAL'); */?> 
                        </ul>
                    </div>
                </div>
            </nav>
