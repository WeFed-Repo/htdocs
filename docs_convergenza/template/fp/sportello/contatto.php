<div class="spPersonWrap">
    <div class="spPersonBox">
        <div class="spPersonInfo">
            <div class="spPersonName">
                <div class="spPersonFirstName"></div>
                <div class="spPersonLastName"></div>
            </div>
            <div class="spPersonBtns">
                <a href="javascript:" class="spPersonMod"><i class="icon icon-big-edit"></i></a><a href="javascript:"
                                                                                                   class="spPersonDel"><i
                            class="icon icon-minus"></i></a>
            </div>
        </div>
        <div class="spPersonOp spPersonOpBonifico">
            <a href="javascript:" class="spPersonOpBtn">
                <i class="icon icon-bonifico_ordinario_sportello"></i><span>Bonifico</span>
            </a>
            <a class="spPersonOpAdd"><i class="icon icon-r-user_add"></i></a>
        </div>
        <div class="spPersonOp spPersonOpCellulare">
            <a href="javascript:" class="spPersonOpBtn">
                <i class="icon icon-ricarica_cellulare_sportello"></i><span>Ricarica cellulare</span>
            </a>
            <a class="spPersonOpAdd"><i class="icon icon-r-user_add"></i></a>
        </div>
        <div class="spPersonOp spPersonOpPrepagata">
            <a href="javascript:" class="spPersonOpBtn">
                <i class="icon icon-ricarica_prepagata_sportello"></i><span>Ricarica prepagata</span>
            </a>
            <a class="spPersonOpAdd"><i class="icon icon-r-user_add"></i></a>
        </div>
    </div>
    <div class="spPersonOpsBox">
        <div class="spPersonOpsInfo">
            <div class="spPersonOpsIcon"><i class="icon icon-bonifico_ordinario_sportello"></i><i
                        class="icon icon-ricarica_cellulare_sportello"></i><i
                        class="icon icon-ricarica_prepagata_sportello"></i></div>
            <div class="spPersonOpsSep"><i class="icon icon-ellipsis-h"></i></div>
            <div class="spPersonOpsImgWrap">
                <div class="spPersonOpsImg"></div>
            </div>
            <div class="spPersonOpsName">
                <span class="spPersonOpsFirstName"></span>
                <span class="spPersonOpsLastName"></span>
            </div>
            <a href="javascript:" class="spPersonOpsClose"><i class="icon icon-close_toolbox"></i></a>
        </div>
        <div class="spPersonOpBox">
            <?php
            $authPrefix = "bonificoContatto";
            $authMsgOK = "Bonifico inserito";
            $authCustomMsgOK = "";
            $authBtnRepeat = "Disponi un nuovo bonifico";
            ?>
            <div class="<?php echo $authPrefix ?>Carousel carouselPlus">
                <div class="carouselPlusPages">
                    <div class="<?php echo $authPrefix ?>Page1 carouselPlusPage">
                        <div class="sectioncont">
                            <?php include("form_contatto_bonifico.php"); ?>
                        </div>
                    </div>
                    <div class="<?php echo $authPrefix ?>Page2 carouselPlusPage">
                        <div class="sectioncont">
                            <?php include("autorizzazione_contatto_bonifico.php"); ?>
                        </div>
                    </div>
                    <div class="<?php echo $authPrefix ?>Page3 carouselPlusPage">
                        <div class="sectioncont">
                            <?php include("conferma_contatto.php"); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="spPersonOpBox">
            <?php
            $authPrefix = "cellulareContatto";
            $authMsgOK = "Ricarica effettuata";
            $authCustomMsgOK = "";
            $authBtnRepeat = "Effettua una nuova ricarica";
            ?>
            <div class="<?php echo $authPrefix ?>Carousel carouselPlus">
                <div class="carouselPlusPages">
                    <div class="<?php echo $authPrefix ?>Page1 carouselPlusPage">
                        <div class="sectioncont">
                            <?php include("form_contatto_cellulare.php"); ?>
                        </div>
                    </div>
                    <div class="<?php echo $authPrefix ?>Page2 carouselPlusPage">
                        <div class="sectioncont">
                            <?php include("autorizzazione_contatto_cellulare.php"); ?>
                        </div>
                    </div>
                    <div class="<?php echo $authPrefix ?>Page3 carouselPlusPage">
                        <div class="sectioncont">
                            <?php include("conferma_contatto.php"); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="spPersonOpBox">
            <?php
            $authPrefix = "prepagataContatto";
            $authMsgOK = "Ricarica effettuata";
            $authCustomMsgOK = "";
            $authBtnRepeat = "Effettua una nuova ricarica";
            ?>
            <div class="<?php echo $authPrefix ?>Carousel carouselPlus">
                <div class="carouselPlusPages">
                    <div class="<?php echo $authPrefix ?>Page1 carouselPlusPage">
                        <div class="sectioncont">
                            <?php include("form_contatto_prepagata.php"); ?>
                        </div>
                    </div>
                    <div class="<?php echo $authPrefix ?>Page2 carouselPlusPage">
                        <div class="sectioncont">
                            <?php include("autorizzazione_contatto_prepagata.php"); ?>
                        </div>
                    </div>
                    <div class="<?php echo $authPrefix ?>Page3 carouselPlusPage">
                        <div class="sectioncont">
                            <?php include("conferma_contatto.php"); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>