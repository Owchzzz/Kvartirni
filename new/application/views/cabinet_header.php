<div class="section">
    
    <ul class="nav_section">
        <li class="<?=($this->uri->segment(2)==='')?'act':''?>"><a  href="/new/cabinet.html"><?php echo lang('my_apartments'); ?></a></li>
        <li class="<?=($this->uri->segment(2)==='profile')?'act':''?>"><a href="/new/cabinet/profile.html"><?php echo lang('profile'); ?></a></li>
        <li class="<?=($this->uri->segment(2)==='paid_services')?'act':''?>"><a href="/new/cabinet/paid_services.html"><?php echo lang('paid_services'); ?></a></li>
        <li class="<?=($this->uri->segment(2)==='payment')?'act':''?>"><a href="/new/cabinet/payment.html"><?php echo lang('payment'); ?></a></li>
        <li class="<?=($this->uri->segment(2)==='blacklist')?'act':''?>"><a href="/new/cabinet/blacklist.html"><?php echo lang('blacklist'); ?></a></li>
    </ul>