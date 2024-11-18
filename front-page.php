<?php get_header(); ?>


<div class="container m-auto rounded-2xl p-8 relative" 
     style="background: url('http://localhost:8888/tta/wp-content/uploads/2024/11/imagebanner.jpg'); background-size: cover;">

    <div class="absolute inset-0 bg-black opacity-30 rounded-2xl pointer-events-none"></div>

    <div class="relative z-10 flex flex-col justify-between h-96">
        <p class="text-white w-1/4 font-centra">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>   
        
        <button class="bg-blue text-white pt-3 pb-3 pl-5 pr-5 rounded-md self-start font-mon text-sm flex items-center"> <svg class="mr-5" xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
  <circle cx="6.32812" cy="6.23438" r="5" stroke="#F5F5F5"/>
</svg> GET IN TOUCH</button>
    </div>
</div>




<section id="what_we_are_about">
    <div class="container mx-auto mt-36">
        <p class="font-centra text-darkgrey">what we’re about</p>
    </div>
    <div class="container m-auto mt-48 mb-48">
        <h2 class="text-9xl">
        <strong class="font-centra">Paid Social Media <br>
                Advertising Agency<br></strong>
            <span class="font-eiko">for fashion &<br>
            lifestyle brands</span><span class="w-20 h-20 rounded-full text-blue">.</span>
        </h2>
    </div>
</section>

<section class="relative mb-48">
    <!-- Video Background -->
    <video class="absolute top-0 left-0 w-full h-full object-cover" autoplay muted loop>
        <source src="http://localhost:8888/tta/wp-content/uploads/2024/11/placeholder-video1.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>

    <!-- Content -->
    <div class="relative container m-auto pt-20 pb-20 font-eiko z-10">
        <p class="text-white w-2/5 text-4xl mb-20">Thoughtful hosted its second annual Thoughtful Minds Connect event at Restaurant Hubert, in May.</p>
        <p class="text-white w-2/5 text-4xl mb-20">The event brings together the brightest minds of e-commerce alongside industry leaders.</p>
        <p class="text-white w-2/5 text-4xl mb-20">The focus is a series of panel discussions, networking and collaboration focused on e-commerce growth.</p>
        <p class="text-white w-2/5 text-4xl mb-20">Thoughtful hosted its second annual Thoughtful Minds Connect event at Restaurant Hubert, in May.</p>
        <button class="bg-blue text-white pt-3 pb-3 pl-5 pr-5 rounded-md font-mon text-sm flex items-center">
            <svg class="mr-5" xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                <circle cx="6.32812" cy="6.23438" r="5" stroke="#F5F5F5"/>
            </svg>
            GET IN TOUCH
        </button>
    </div>

    <!-- Overlay -->
    <div class="absolute top-0 left-0 w-full h-full bg-black opacity-50 z-0"></div>
</section>



<section id="brands">
    <div class="container m-auto">
        <div class="w-1/2 flex flex-row justify-between font-centra mb-10 text-darkgrey">
            <p class="w-1/2">
                These are our clients sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.
            </p>
            <a href="#" class="text-darkgrey underline underline-offset-8">view all</a>
        </div>
    </div>
    <div class="container m-auto relative bg-gray-900">
        <div class="absolute inset-0 flex items-center justify-center">
            <span class="text-[200px] md:text-[250px] lg:text-[200px] font-extrabold text-white pointer-events-none mix-blend-difference">CLIENTS</span>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-4 gap-2">
            <?php
            $args = array(
                'post_type'      => 'brand', 
                'posts_per_page' => 12,
            );

            $brands_query = new WP_Query($args);

            if ($brands_query->have_posts()) :
                
                $masonry_columns = [[], [], [], []]; 
                $index = 0;

                while ($brands_query->have_posts()) : $brands_query->the_post(); 
                    if (has_post_thumbnail()) {
                        $masonry_columns[$index % 4][] = get_the_post_thumbnail_url(get_the_ID(), 'full');
                        $index++;
                    }
                endwhile;

                
                foreach ($masonry_columns as $column_images) : ?>
                    <div class="grid gap-2">
                        <?php foreach ($column_images as $image_url) : ?>
                            <div>
                                <img class="h-auto max-w-full rounded-lg" src="<?php echo esc_url($image_url); ?>" alt="Brand">
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php endforeach;

                wp_reset_postdata();
             ?>
            
            <?php endif; ?>
        </div>
    </div>
</section>






<!--
<section id="brands">
    <div class="container m-auto">
        <div class="w-1/2 flex flex-row justify-between font-centra mb-10 text-darkgrey">
            <p class="w-1/2">These are our clients sit amet, consectetur adipiscing elit, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis nostrud.</p>
            <a href="#" class="text-darkgrey underline underline-offset-8">view all</a>
        </div>
       
    </div>
    <div class="container m-auto relative bg-gray-900">
        <div class="absolute inset-0 flex items-center justify-center">
            <span class="text-[200px] md:text-[250px] lg:text-[200px] font-extrabold text-white pointer-events-none mix-blend-difference">CLIENTS</span>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-4 gap-2">
            <div class="grid gap-2">
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="http://localhost:8888/tta/wp-content/uploads/2024/11/image-18.jpg" alt="">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="http://localhost:8888/tta/wp-content/uploads/2024/11/image-18.jpg" alt="">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="http://localhost:8888/tta/wp-content/uploads/2024/11/image-20.jpg" alt="">
                </div>
            </div>
            <div class="grid gap-2">
                <div>
                    <img class="h-auto max-w-full rounded-md" src="http://localhost:8888/tta/wp-content/uploads/2024/11/image-9.jpg" alt="">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-md" src="http://localhost:8888/tta/wp-content/uploads/2024/11/image-26.jpg" alt="">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-md" src="http://localhost:8888/tta/wp-content/uploads/2024/11/image-20.jpg" alt="">
                </div>
            </div>
            <div class="grid gap-2">
                <div>
                    <img class="h-auto max-w-full rounded-md" src="http://localhost:8888/tta/wp-content/uploads/2024/11/image-13.jpg" alt="">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-md" src="http://localhost:8888/tta/wp-content/uploads/2024/11/image-21.png" alt="">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-md" src="http://localhost:8888/tta/wp-content/uploads/2024/11/image-25.jpg" alt="">
                </div>
            </div>
            <div class="grid gap-2">
                <div>
                    <img class="h-auto max-w-full rounded-md" src="http://localhost:8888/tta/wp-content/uploads/2024/11/image-17.jpg" alt="">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-md" src="http://localhost:8888/tta/wp-content/uploads/2024/11/image-20.jpg" alt="">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-md" src="http://localhost:8888/tta/wp-content/uploads/2024/11/image-18.jpg" alt="">
                </div>
            </div>
        </div>

    </div>
</section>
-->


<section id="work" class="mt-48">
    <div class="container m-auto">
        <div class="w-1/2 flex flex-row justify-between font-centra mb-10 text-darkgrey">
            <p class="w-1/2">These are our clients sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud. <br><br> Not sure why this is here...</p>
            <a href="#" class="text-darkgrey underline underline-offset-8">view all</a>
        </div>
    </div>
    <div class="container m-auto relative bg-gray-900">
        <div class="grid grid-cols-2 md:grid-cols-2 gap-2">
            <div class="absolute inset-0 flex items-center justify-center">
                <span class="text-[200px] md:text-[250px] lg:text-[200px] font-extrabold text-white pointer-events-none mix-blend-difference">WORK</span>
            </div>
            <?php
            $portfolio_query = new WP_Query([
                'post_type' => 'portfolio', 
                'posts_per_page' => -1,
            ]);

            if ($portfolio_query->have_posts()):
                while ($portfolio_query->have_posts()): $portfolio_query->the_post();
                    $featured_image = get_the_post_thumbnail_url(get_the_ID(), 'full');
                    $title = get_the_title();
                    $excerpt = get_the_excerpt();
            ?>
                <div class="grid gap-2">
                    <div>
                        <img class="h-auto max-w-full rounded-lg" src="<?php echo esc_url($featured_image); ?>" alt="<?php echo esc_attr($title); ?>">
                        <p class="font-centra text-2xl text-darkgrey mt-5"><?php echo esc_html($title); ?></p>
                        <p class="font-cerapro text-black1 mt-5 text-xs"><?php echo esc_html($excerpt); ?></p>
                    </div>
                </div>
            <?php
                endwhile;
                wp_reset_postdata();
            else:
            ?>
                <p class="text-center text-white">No portfolio items found.</p>
            <?php endif; ?>
        </div>
    </div>
</section>

<!--
<section id="work" class="mt-48">
    <div class="container m-auto">
        <div class="w-1/2 flex flex-row justify-between font-centra mb-10 text-darkgrey">
            <p class="w-1/2">These are our clients sit amet, consectetur adipiscing elit, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis nostrud. <br><br> Not sure why this is here...</p>
            
            <a href="#" class="text-darkgrey underline underline-offset-8">view all</a>
        </div>
    </div>
    <div class="container m-auto relative bg-gray-900">
        <div class="grid grid-cols-2 md:grid-cols-2 gap-2">
            <div class="absolute inset-0 flex items-center justify-center">
                <span class="text-[200px] md:text-[250px] lg:text-[200px] font-extrabold text-white pointer-events-none mix-blend-difference">WORK</span>
            </div>
            <div class="grid gap-2">
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="http://localhost:8888/tta/wp-content/uploads/2024/11/image-13.jpg" alt="">
                    <p class="font-centra text-2xl text-darkgrey mt-5">Aur Ocea</p>
                    <p class="font-cerapro text-black1 mt-5 text-xs">We're all about taking a 360-degree approach, bringing  all our services under the same umbrella to create communication that  is really creative and actually gets results. At The Thoughtful Agency, we're all about giving your brand the attention it deserves. </p>
                </div>
            </div>
            <div class="grid gap-2">
                <div>
                    <img class="h-auto max-w-full rounded-md" src="http://localhost:8888/tta/wp-content/uploads/2024/11/image-18.jpg" alt="">
                    <p class="font-centra text-2xl text-darkgrey mt-5">Aur Ocea</p>
                    <p class="font-cerapro text-black1 mt-5 text-xs">We're all about taking a 360-degree approach, bringing  all our services under the same umbrella to create communication that  is really creative and actually gets results. At The Thoughtful Agency, we're all about giving your brand the attention it deserves. </p>
                </div>
            </div>
        </div>
    </div>
<section>
-->

<section class="py-12 bg-gray-50 mt-48" id="our-services">
  <div class="container mx-auto px-6">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
      <!-- Column 1 -->
      <div class="font-centra">
        <p class="text-2xl font-bold mb-6">Our Services</p>
        <p class="text-lg text-gray-700 mb-8">
          Our expertise lies in scaling e-commerce business models through data, technology, digital advertising, and brand performance for market-leading fashion and lifestyle brands.
        </p>
        <button class="px-6 py-3 bg-blue-600 text-white font-semibold rounded hover:bg-blue-700">
          Get in Touch
        </button>
      </div>
      
      <!-- Column 2 -->
        
      <div class="font-centra">
            <ul class="space-y-4">
                <?php
                $service_query = new WP_Query([
                    'post_type' => 'service', 
                    'posts_per_page' => -1,  
                ]);

                if ($service_query->have_posts()):
                    while ($service_query->have_posts()): $service_query->the_post();
                        $title = get_the_title(); 
                        $permalink = get_permalink(); 
                ?>
                    <li class="flex justify-between items-center border-b border-b-border_color border-solid pb-4">
                        <span><?php echo esc_html($title); ?></span>
                        <a href="<?php echo esc_url($permalink); ?>" class="text-blue-600">
                            <svg xmlns="http://www.w3.org/2000/svg" width="116" height="23" viewBox="0 0 116 23" fill="none">
                                <path d="M0.675373 11.5276L114.906 11.5272M114.906 11.5272L104.467 21.9329M114.906 11.5272L104.498 1.08829" stroke="#201F1E" />
                            </svg>
                        </a>
                    </li>
                <?php
                    endwhile;
                    wp_reset_postdata();
                else:
                ?>
                    <li class="text-center text-gray-500">No services found.</li>
                <?php endif; ?>
            </ul>
        </div>


    </div>
  </div>
</section>



<section class="py-12 bg-white mt-48" id="testimonilas">
  <div class="container mx-auto px-6">
    <div class="mb-8">
      <h3 class="text-sm text-gray-500">Testimonials &bull; One of Eight</h3>
    </div>
    <blockquote class="text-2xl font-serif text-gray-800 mb-6">
      <p class="mb-4">
        Our partnership with <span class="font-bold">The Thoughtful Agency</span> functions more as an extension of our team.
      </p>
      <p class="mb-4">
        <span class="font-bold">Thoughtful</span> play a key role in influencing the growth culture of our business beyond just performance marketing.
      </p>
      <p>
        They have a genuine interest in the development of all of our channels.
      </p>
    </blockquote>
    <div class="testimonials-author flex">
    <p class="text-sm text-gray-500">— Billy Voss, CEO, Bassike</p>
    <div class="mt-6 flex items-center space-x-4">
        <span class="p-2 rounded hover:bg-gray-200">
            <svg xmlns="http://www.w3.org/2000/svg" width="116" height="23" viewBox="0 0 116 23" fill="none" class="transform scale-x-[-1]">
                <path d="M0.675373 11.5276L114.906 11.5272M114.906 11.5272L104.467 21.9329M114.906 11.5272L104.498 1.08829" stroke="#201F1E" />
            </svg>
        </span>

      <span class="p-2 rounded hover:bg-gray-200"><svg xmlns="http://www.w3.org/2000/svg" width="116" height="23" viewBox="0 0 116 23" fill="none">
                <path d="M0.675373 11.5276L114.906 11.5272M114.906 11.5272L104.467 21.9329M114.906 11.5272L104.498 1.08829" stroke="#201F1E" />
                </svg></span>
    </div>
    </div>
  </div>
</section>


<?php get_footer(); ?>