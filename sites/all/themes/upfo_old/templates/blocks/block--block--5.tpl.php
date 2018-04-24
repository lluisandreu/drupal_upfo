<div id="<?php print $block_html_id; ?>" class="<?php print $classes; ?>"<?php print $attributes; ?>>
  <svg version="1.1" id="svg-news" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
    viewBox="0 0 442 442" style="enable-background:new 0 0 23.382 23.382; width: 40px; fill:#C3C3C3" xml:space="preserve" class="svg-aside">
    <g>
      <path d="M171,336H70c-5.523,0-10,4.477-10,10s4.477,10,10,10h101c5.523,0,10-4.477,10-10S176.523,336,171,336z"/>
      <path d="M322,336H221c-5.523,0-10,4.477-10,10s4.477,10,10,10h101c5.522,0,10-4.477,10-10S327.522,336,322,336z"/>
      <path d="M322,86H70c-5.523,0-10,4.477-10,10s4.477,10,10,10h252c5.522,0,10-4.477,10-10S327.522,86,322,86z"/>
      <path d="M322,136H221c-5.523,0-10,4.477-10,10s4.477,10,10,10h101c5.522,0,10-4.477,10-10S327.522,136,322,136z"/>
      <path d="M322,186H221c-5.523,0-10,4.477-10,10s4.477,10,10,10h101c5.522,0,10-4.477,10-10S327.522,186,322,186z"/>
      <path d="M322,236H221c-5.523,0-10,4.477-10,10s4.477,10,10,10h101c5.522,0,10-4.477,10-10S327.522,236,322,236z"/>
      <path d="M322,286H221c-5.523,0-10,4.477-10,10s4.477,10,10,10h101c5.522,0,10-4.477,10-10S327.522,286,322,286z"/>
      <path d="M171,286H70c-5.523,0-10,4.477-10,10s4.477,10,10,10h101c5.523,0,10-4.477,10-10S176.523,286,171,286z"/>
      <path d="M171,136H70c-5.523,0-10,4.477-10,10v101c0,5.523,4.477,10,10,10h101c5.523,0,10-4.477,10-10V146
        C181,140.477,176.523,136,171,136z M161,237H80v-81h81V237z"/>
        <path d="M422,76h-30V46c0-11.028-8.972-20-20-20H20C8.972,26,0,34.972,0,46v320c0,27.57,22.43,50,50,50h342c27.57,0,50-22.43,50-50
          V96C442,84.972,433.028,76,422,76z M422,366c0,16.542-13.458,30-30,30H50c-16.542,0-30-13.458-30-30V46h352v305
          c0,13.785,11.215,25,25,25c5.522,0,10-4.477,10-10s-4.478-10-10-10c-2.757,0-5-2.243-5-5V96h30V366z"/>
        </g>
      </svg>
      <?php print render($title_prefix); ?>
      <?php if ($block->subject): ?>
      <h2<?php print $title_attributes; ?>> <?php print $block->subject ?></h2>
      <?php endif;?>
      <div class="social-icons">
        <a href="https://www.facebook.com/UrbanPhotoFest" target="_blank"><i class="fi-social-facebook"></i></a>
        <a href="https://twitter.com/UrbanPhotoFest" target="_blank"><i class="fi-social-twitter"></i></a>
      </div>
      <div class="clearfix"></div>
      <?php print render($title_suffix); ?>
      <div class="content panel"<?php print $content_attributes; ?>>
        <?php print $content ?>
      </div>
    </div>