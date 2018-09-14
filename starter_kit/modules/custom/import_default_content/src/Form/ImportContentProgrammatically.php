<?php
/**
 * @file
 * Contains \Drupal\import_default_content\Form\ImportContentProgrammatically
 */
namespace Drupal\import_default_content\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use \Drupal\node\Entity\Node;
use \Drupal\file\Entity\File;
use \Drupal\taxonomy\Entity\Term;
use Drupal\menu_link_content\Entity\MenuLinkContent;
/**
 * Form to import dummy content programmatically for the website
 */
class ImportContentProgrammatically extends FormBase {

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'import_content_programmatically_form';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $form['import'] = [
      '#type' => 'submit',
      '#value' => $this->t('Import content'),
    ];

    return $form;
  }

  /**
   * Form submission handler.
   *
   * @param array $form
   *   An associative array containing the structure of the form.
   * @param \Drupal\Core\Form\FormStateInterface $form_state
   *   The current state of the form.
   */
  public function submitForm(array &$form, FormStateInterface $form_state) { 
    global $base_url;
        
    // Homepage slider content
    $data = file_get_contents($base_url.'/profiles/starter_kit/modules/custom/import_default_content/banner-image/background-default.jpg');
    $file = file_save_data($data, 'public://IT-image.jpg', FILE_EXISTS_REPLACE);
    $node = \Drupal::entityTypeManager()->getStorage('node')->create(array(
      'type'        => 'banner',
      'title'       => 'Slider 1',
      'body'        => '',
      'field_banner_image' => [
        'target_id' => $file->id(),
        'alt' => 'IT',
        'title' => 'IT'
      ],
      'field_banner_type' => 'Frontpage',
    ));
    $node->save();

    $data = file_get_contents($base_url.'/profiles/starter_kit/modules/custom/import_default_content/banner-image/background-default-1.jpg');
    $file = file_save_data($data, 'public://IT-image-2.jpg', FILE_EXISTS_REPLACE);
    $node = \Drupal::entityTypeManager()->getStorage('node')->create(array(
      'type'        => 'banner',
      'title'       => 'Slider 2',
      'body'        => '',
      'field_banner_image' => [
        'target_id' => $file->id(),
        'alt' => 'IT',
        'title' => 'IT'
      ],
      'field_banner_type' => 'Frontpage',
    ));
    $node->save();

    $data = file_get_contents($base_url.'/profiles/starter_kit/modules/custom/import_default_content/banner-image/background-default-2.jpg');
    $file = file_save_data($data, 'public://IT-image-3.jpg', FILE_EXISTS_REPLACE);
    $node = \Drupal::entityTypeManager()->getStorage('node')->create(array(
      'type'        => 'banner',
      'title'       => 'Slider 3',
      'body'        => '',
      'field_banner_image' => [
        'target_id' => $file->id(),
        'alt' => 'IT',
        'title' => 'IT'
      ],
      'field_banner_type' => 'Frontpage',
    ));
    $node->save();
    
    // News content
    $data = file_get_contents('https://www.neosofttech.com/sites/default/files/styles/large/public/default_images/blog-img2.png');
    $file = file_save_data($data, 'public://news-1.png', FILE_EXISTS_REPLACE);
    $node = \Drupal::entityTypeManager()->getStorage('node')->create(array(
      'type'        => 'news',
      'title'       => 'Making sense of bitcoin, cryptocurrency, and blockchain',
      'body'        => 'There has been a lot of noise recently about terms like "bitcoin," "blockchain," and "cryptocurrency." Some of it is hype, but some of it points to important forces in the financial services industry. So what does it all mean?
                        We can help. We’ve pulled together a few short articles that explain why a lot of industry observers are paying close attention.
                        Let\'s start with some quick definitions. Blockchain is the technology that enables the existence of cryptocurrency (among other things). Bitcoin is the name of the best-known cryptocurrency, the one for which blockchain technology was invented. A cryptocurrency is a medium of exchange, such as the US dollar, but is digital and uses encryption techniques to control the creation of monetary units and to verify the transfer of funds.',
      'field_start_date' => '09/14/2018',
      'field_end_date'   => '09/30/2018',
      'field_featured_news' => 1,
      'field_news_category' => '5',
      'field_news_image' => [
        'target_id' => $file->id(),
        'alt' => 'IT',
        'title' => 'IT'
      ],
    ));
    $node->save();

    $data = file_get_contents('https://www.neosofttech.com/sites/default/files/styles/large/public/Web-Optimisation-search-thumb.jpg');
    $file = file_save_data($data, 'public://news-2.jpg', FILE_EXISTS_REPLACE);
    $node = \Drupal::entityTypeManager()->getStorage('node')->create(array(
      'type'        => 'news',
      'title'       => 'A Few Tips for Scaling Up Web Performance',
      'body'        => 'Every millisecond counts when it comes to loading Web pages and their responsiveness. 
                        It has become critical to optimise the performance of Web applications/pages to retain existing visitors and bring in new customers. If you are eager to explore the world of Web optimisation, then this article is the right place to start.
                        The World Wide Web has evolved into the primary channel to access both information and services in the digital era. Though network speed has increased many times over, it is still very important to follow best practices when designing and developing Web pages to provide optimal user experiences. Visitors of Web pages/applications expect the page to load as quickly as possible, irrespective of the speed of their network or the capability of their device.
                        Along with quick loading, another important parameter is to make Web applications more responsive. If a page doesn’t meet these two criteria, then users generally move out of it and look for better alternatives. So, both from the technical and economical perspectives, it becomes very important to optimise the responsiveness of Web pages.
                        Optimisation cannot be thought of just as an add-on after completing the design of the page. If certain optimisation practices are followed during each stage of Web page development, these will certainly result in a better performance. This article explores some of these best practices to optimise the performance of the Web page/application.',
      'field_start_date' => '09/14/2018',
      'field_end_date'   => '09/30/2018',
      'field_featured_news' => 1,
      'field_news_category' => '6',
      'field_news_image' => [
        'target_id' => $file->id(),
        'alt' => 'IT',
        'title' => 'IT'
      ],
    ));
    $node->save();

    $data = file_get_contents('https://www.neosofttech.com/sites/default/files/styles/large/public/Redis-Database-thumb.jpg');
    $file = file_save_data($data, 'public://news-3.jpg', FILE_EXISTS_REPLACE);
    $node = \Drupal::entityTypeManager()->getStorage('node')->create(array(
      'type'        => 'news',
      'title'       => 'Discover the Many Benefits of the Redis Database',
      'body'        => 'Today, apart from relational tables, data is also available in other forms such as images, texts, blogs, lists, etc. 
                        Redis can be used as a database, cache and message broker. It is exceptionally fast, and can support five data types and two special types of data.
                        Redis is an open source, in-memory and key/value NoSQL database. Known to be an exceptionally fast in-memory database, Redis is used as a database, cache and message broker, and is written in C. It supports five data types— strings, hashes, lists, sets, sorted sets and two special types of data—Bitmap and HyperLogLog.
                        Since Redis runs in memory, it is very fast but is disk persistent. So in case a crash happens, data is not lost. Redis can perform about 110,000 SETs and about 81,000 GETs per second. This popular database is used by many companies such as Pinterest, Instagram, StackOverflow, Docker, etc.',
      'field_start_date' => '09/14/2018',
      'field_end_date'   => '09/30/2018',
      'field_featured_news' => 1,
      'field_news_category' => '7',
      'field_news_image' => [
        'target_id' => $file->id(),
        'alt' => 'IT',
        'title' => 'IT'
      ],
    ));
    $node->save();

    $data = file_get_contents('https://www.neosofttech.com/sites/default/files/styles/large/public/web-developer-thumb.jpg');
    $file = file_save_data($data, 'public://news-4.jpg', FILE_EXISTS_REPLACE);
    $node = \Drupal::entityTypeManager()->getStorage('node')->create(array(
      'type'        => 'news',
      'title'       => 'Top 5 trends that web developers must need to follow in 2017',
      'body'        => 'What if Facebook had never integrated its updates and we still were using its original interface the Social Media Network began with? Sounds pretty dull, right? Would you like to return to the newsfeed of 2009 or prefer the profile layout before the timeline was introduced in 2011?
                        The decade since the mighty social media network went live, is a saga of enormous makeovers and its transformation from a cluttered catch-all news feed to a sophisticated and personalized timeline as we know today. The Facebook’s evolution story is a clear demonstration of why it is important to change, evolve and stay at the top of the trends, otherwise; you will probably be wiped out as thousands of new websites are pouring into the internet every day.',
      'field_start_date' => '09/14/2018',
      'field_end_date'   => '09/30/2018',
      'field_featured_news' => 1,
      'field_news_category' => '8',
      'field_news_image' => [
        'target_id' => $file->id(),
        'alt' => 'IT',
        'title' => 'IT'
      ],
    ));
    $node->save();

    $data = file_get_contents('https://www.neosofttech.com/sites/default/files/styles/large/public/programming-testing-illustration-thumb.jpg');
    $file = file_save_data($data, 'public://news-5.jpg', FILE_EXISTS_REPLACE);
    $node = \Drupal::entityTypeManager()->getStorage('node')->create(array(
      'type'        => 'news',
      'title'       => 'Five Friendly Open Source Tools for Testing Web Applications',
      'body'        => 'Web application testing helps ensure that the apps conform to certain set standards. 
                        It is a means to check for any bugs in the application before the latter goes live or the code is released on the Internet. Various aspects of the application and its behaviour under different conditions are checked. Here’s a brief introduction to five popular open source tools you can use for this job.
                        The term ‘Web application’ or ‘Web app’ is often confused with ‘website’. So let’s get that doubt cleared —a Web application is a computer app that is hosted on a website. A website has some fixed content while a Web application performs various definite actions based on the users’ inputs and actions.
                        Web application testing:
                        Web application testing involves all those activities that software testers perform to certify a Web app. This testing has its own set of criteria and checkpoints, based on the development model, to decide whether the actions are part of expected behaviour or not.',
      'field_start_date' => '09/14/2018',
      'field_end_date'   => '09/30/2018',
      'field_featured_news' => 1,
      'field_news_category' => '9',
      'field_news_image' => [
        'target_id' => $file->id(),
        'alt' => 'IT',
        'title' => 'IT'
      ],
    ));
    $node->save();
    
    // Blog content
    $data = file_get_contents('https://www.neosofttech.com/sites/default/files/styles/large/public/Selecting-the-right-database-thumb.jpg');
    $file = file_save_data($data, 'public://blog-1.jpg', FILE_EXISTS_REPLACE);
    $node = \Drupal::entityTypeManager()->getStorage('node')->create(array(
      'type'        => 'blog',
      'title'       => 'Choose the Right Database for Your Application',
      'body'        => 'Databases are key components of many an app and choosing the right option is an elaborate process. 
                        This article examines the role that databases play in apps, giving readers tips on selecting the right option. It also discusses the pros and cons of a few select databases.
                  Every other day we discover a new online application that tries to make our lives more convenient. And as soon as we get to know about it, we register ourselves for that application without giving it a second thought. After the one-time registration, whenever we want to use that app again, we just need to log in with our user name and password —the app or system automatically remembers all our data that was provided during the registration process. Ever wondered how a system is able to identify us and recollect all our data on the basis of just a user name and password? It’s all because of the database in which all our information or data gets stored when we register for any application.
                  Similarly, when we browse through millions of product items available on various online shopping applications like Amazon, or post our selfies on Facebook to let all our friends see them, it’s the database that is making all this possible.
                  According to Wikipedia, a database is an organised collection of data. Now, why does data need to be in an organised form? Let’s flash back to a few years ago, when we didn’t have any database and government offices like electricity boards stored large heaps of files containing the data of all users. Imagine how cumbersome it must have been to enter details pertaining to a customer’s consumption of electricity, payments made or pending, etc, if the names were not listed alphabetically. It would have been time consuming as well. It’s the same with databases. If the data is not present in an organised form, then the processing time in fetching any data is quite long. The data stored in a database can be in any organised form—schemas, reports, tables, views or any other objects. These are basically organised in such way as to help easy retrieval of information. The data stored in files can get lost when the papers of these files get older and, hence, get destroyed. But in a database, we can store data for millions of years without any such fear. Data will get lost only when the system crashes, which is why we keep a backup.',
      'field_blog_image' => [
        'target_id' => $file->id(),
        'alt' => 'IT',
        'title' => 'IT'
      ],
      'field_featured_blog' => '1',
    ));
    $node->save();

    $data = file_get_contents('https://www.neosofttech.com/sites/default/files/styles/large/public/Native-vs-hybrid-app-thumb.jpg');
    $file = file_save_data($data, 'public://blog-2.jpg', FILE_EXISTS_REPLACE);
    $node = \Drupal::entityTypeManager()->getStorage('node')->create(array(
      'type'        => 'blog',
      'title'       => 'Native vs hybrid apps: Key points to help you decide the best way forward',
      'body'        => 'You might be thinking of developing a mobile application, but confused how to go about it or from where to start due to the various technologies available to develop apps? Also, which is the best for your business – a native app or a hybrid app? Let’s find out.
                      Your choice of a native or a hybrid app will depend on several contrasting factors including your budget, targeted audience and your deadline. The very moment you decide to invest in a mobile app, you immediately come across loads of terminology.
                      You need to know the difference between iOS and Android and the nature of native, hybrid and web apps. And very importantly, you also need to find out which app is the most suitable for you. So, in this article, we will go through all the differences between the two types of apps, understand which one to use and will make you aware of some of the benefits of each.',
      'field_blog_image' => [
        'target_id' => $file->id(),
        'alt' => 'IT',
        'title' => 'IT'
      ],
      'field_featured_blog' => '1',
    ));
    $node->save();

    $data = file_get_contents('https://www.neosofttech.com/sites/default/files/styles/large/public/Docker-container-in-seal-thumb.jpg');
    $file = file_save_data($data, 'public://blog-3.jpg', FILE_EXISTS_REPLACE);
    $node = \Drupal::entityTypeManager()->getStorage('node')->create(array(
      'type'        => 'blog',
      'title'       => 'Docker is emerging as the future of application delivery',
      'body'        => 'This is a discussion on the role of Docker in software development and how it scores over virtual machines. 
                        As it becomes increasingly popular, let’s look at what the future holds for Docker.
                        We all know that Docker is simple to get up and running on our local machines. But seamlessly transitioning our honed application stacks from development to production is problematic.
                        Docker Cloud makes it easy to provision nodes from existing cloud providers. If you already have an account with an Infrastructure-as-a-Service (IaaS) provider, you can provision new nodes directly from within Docker Cloud, which can play a crucial role in digital transformation.',
      'field_blog_image' => [
        'target_id' => $file->id(),
        'alt' => 'IT',
        'title' => 'IT'
      ],
      'field_featured_blog' => '1',
    ));
    $node->save();

    $data = file_get_contents('https://www.neosofttech.com/sites/default/files/styles/large/public/feature-thumb.jpg');
    $file = file_save_data($data, 'public://blog-4.jpg', FILE_EXISTS_REPLACE);
    $node = \Drupal::entityTypeManager()->getStorage('node')->create(array(
      'type'        => 'blog',
      'title'       => 'Top 10 Open Source Tools for Web Developers',
      'body'        => 'Every Web developer needs to be armed with a set of tools that aid and assist in building better and more complex websites. 
                        From the wide range of Web development tools available, we present a set of 10 that in the author’s opinion are a must for any Web development tool kit.
                        At a time when websites are getting more complex, we need more sophisticated and advanced Web development tools. There are plenty of tools available and new ones are constantly being introduced. It’s up to you to choose the best options to meet your requirements.',
      'field_blog_image' => [
        'target_id' => $file->id(),
        'alt' => 'IT',
        'title' => 'IT'
      ],
      'field_featured_blog' => '1',
    ));
    $node->save();

    $data = file_get_contents('https://www.neosofttech.com/sites/default/files/styles/large/public/Google-Firebase-thumb.jpg');
    $file = file_save_data($data, 'public://blog-5.jpg', FILE_EXISTS_REPLACE);
    $node = \Drupal::entityTypeManager()->getStorage('node')->create(array(
      'type'        => 'blog',
      'title'       => 'Power your mobile applications with Firebase',
      'body'        => 'Firebase is a Google mobile platform that helps you quickly develop high quality apps and thereby scale your business. 
                        This article covers the range of services it offers to the user.
                        Firebase started off as a real-time database in 2011 and saw some traction in key applications. The real upswing for the platform came about when Google acquired it in 2014, and since then a significant number of features have been developed for this database. It has now become a complete platform that provides services for development, testing, distribution, analytics and more.
                        Firebase categorises its services into two areas that help you do the following:
                            Develop and test your application
                            Grow and engage your audience',
      'field_blog_image' => [
        'target_id' => $file->id(),
        'alt' => 'IT',
        'title' => 'IT'
      ],
      'field_featured_blog' => '1',
    ));
    $node->save();

    
    // Image gallery content
    $data_1 = file_get_contents('https://www.neosofttech.com/sites/default/files/styles/large/public/Google-Firebase-thumb.jpg');
    $file_1 = file_save_data($data_1, 'public://image_gallery-1.jpg', FILE_EXISTS_REPLACE);
    $data_2 = file_get_contents('https://www.neosofttech.com/sites/default/files/Google-Firebase_0.jpg');
    $file_2 = file_save_data($data_2, 'public://image_gallery-2.jpg', FILE_EXISTS_REPLACE);
    $node = \Drupal::entityTypeManager()->getStorage('node')->create(array(
      'type'        => 'image_gallery',
      'title'       => 'Power your mobile applications with Firebase',
      'body'        => 'Firebase is a Google mobile platform that helps you quickly develop high quality apps and thereby scale your business. 
                        This article covers the range of services it offers to the user.
                        Firebase started off as a real-time database in 2011 and saw some traction in key applications. The real upswing for the platform came about when Google acquired it in 2014, and since then a significant number of features have been developed for this database. It has now become a complete platform that provides services for development, testing, distribution, analytics and more.
                        Firebase categorises its services into two areas that help you do the following:
                        Develop and test your application
                        Grow and engage your audience',
      'field_featured_image' => [
        'target_id' => $file_1->id(),
        'alt' => 'IT',
        'title' => 'IT'
      ],
      'field_image_gallery' => [
        'target_id' => $file_2->id(),
        'alt' => 'IT',
        'title' => 'IT'
      ],
      'field_featured_image_gallery' => '1',
    ));
    $node->save();

    $data_1 = file_get_contents('https://www.neosofttech.com/sites/default/files/styles/large/public/Docker-container-in-seal-thumb.jpg');
    $file_1 = file_save_data($data_1, 'public://image_gallery-3.jpg', FILE_EXISTS_REPLACE);
    $data_2 = file_get_contents('https://www.neosofttech.com/sites/default/files/Docker-container-in-seal.jpg');
    $file_2 = file_save_data($data_2, 'public://image_gallery-4.jpg', FILE_EXISTS_REPLACE);
    $node = \Drupal::entityTypeManager()->getStorage('node')->create(array(
      'type'        => 'image_gallery',
      'title'       => 'Docker is emerging as the future of application delivery',
      'body'        => 'This is a discussion on the role of Docker in software development and how it scores over virtual machines.
                      As it becomes increasingly popular, let’s look at what the future holds for Docker.
                      We all know that Docker is simple to get up and running on our local machines. But seamlessly transitioning our honed application stacks from development to production is problematic.
                      Docker Cloud makes it easy to provision nodes from existing cloud providers. If you already have an account with an Infrastructure-as-a-Service (IaaS) provider, you can provision new nodes directly from within Docker Cloud, which can play a crucial role in digital transformation.',
      'field_featured_image' => [
        'target_id' => $file_1->id(),
        'alt' => 'IT',
        'title' => 'IT'
      ],
      'field_image_gallery' => [
        'target_id' => $file_2->id(),
        'alt' => 'IT',
        'title' => 'IT'
      ],
      'field_featured_image_gallery' => '1',
    ));
    $node->save();

    $data_1 = file_get_contents('https://www.neosofttech.com//sites/default/files/styles/large/public/feature-thumb.jpg');
    $file_1 = file_save_data($data_1, 'public://image_gallery-5.jpg', FILE_EXISTS_REPLACE);
    $data_2 = file_get_contents('https://www.neosofttech.com/sites/default/files/feature_0.jpg');
    $file_2 = file_save_data($data_2, 'public://image_gallery-6.jpg', FILE_EXISTS_REPLACE);
    $node = \Drupal::entityTypeManager()->getStorage('node')->create(array(
      'type'        => 'image_gallery',
      'title'       => 'Top 10 Open Source Tools for Web Developers',
      'body'        => 'Every Web developer needs to be armed with a set of tools that aid and assist in building better and more complex websites. 
                        From the wide range of Web development tools available, we present a set of 10 that in the author’s opinion are a must for any Web development tool kit.
                        At a time when websites are getting more complex, we need more sophisticated and advanced Web development tools. There are plenty of tools available and new ones are constantly being introduced. It’s up to you to choose the best options to meet your requirements.',
      'field_featured_image' => [
        'target_id' => $file_1->id(),
        'alt' => 'IT',
        'title' => 'IT'
      ],
      'field_image_gallery' => [
        'target_id' => $file_2->id(),
        'alt' => 'IT',
        'title' => 'IT'
      ],
      'field_featured_image_gallery' => '1',
    ));
    $node->save();

    // Video Gallery content
    $data = file_get_contents( $base_url.'/profiles/starter_kit/modules/custom/import_default_content/banner-image/default-video-gallery-image.jpg');
    $file = file_save_data($data, 'public://video-gallery-1.jpg', FILE_EXISTS_REPLACE);
    $node = \Drupal::entityTypeManager()->getStorage('node')->create(array(
      'type'        => 'video_gallery',
      'title'       => 'Power your mobile applications with Firebase',
      'body'        => '',
      'field_featured_image_for_gallery' => [
        'target_id' => $file->id(),
        'alt' => 'IT',
        'title' => 'IT'
      ],
      'field_youtube_video' => 'https://www.youtube.com/watch?v=nffXvVVKcLs',
      'field_featured_video_gallery' => '1',
      'field_link_to' => 'https://www.google.com/',
    ));
    $node->save();

    $data = file_get_contents( $base_url.'/profiles/starter_kit/modules/custom/import_default_content/banner-image/default-video-gallery-image.jpg');
    $file = file_save_data($data, 'public://video-gallery-2.jpg', FILE_EXISTS_REPLACE);
    $node = \Drupal::entityTypeManager()->getStorage('node')->create(array(
      'type'        => 'video_gallery',
      'title'       => 'Discover the Many Benefits of the Redis Database',
      'body'        => '',
      'field_featured_image_for_gallery' => [
        'target_id' => $file->id(),
        'alt' => 'IT',
        'title' => 'IT'
      ],
      'field_youtube_video' => 'https://www.youtube.com/watch?v=K2O-sHZeOc0',
      'field_featured_video_gallery' => '1',
      'field_link_to' => 'https://www.google.com/',
    ));
    $node->save();

    $data = file_get_contents( $base_url.'/profiles/starter_kit/modules/custom/import_default_content/banner-image/default-video-gallery-image.jpg');
    $file = file_save_data($data, 'public://video-gallery-3.jpg', FILE_EXISTS_REPLACE);
    $node = \Drupal::entityTypeManager()->getStorage('node')->create(array(
      'type'        => 'video_gallery',
      'title'       => 'Five Friendly Open Source Tools for Testing Web Applications',
      'body'        => '',
      'field_featured_image_for_gallery' => [
        'target_id' => $file->id(),
        'alt' => 'IT',
        'title' => 'IT'
      ],
      'field_youtube_video' => 'https://www.youtube.com/watch?v=Dxuvr97u_w8',
      'field_featured_video_gallery' => '1',
      'field_link_to' => 'https://www.google.com/',
    ));
    $node->save();

    $data = file_get_contents( $base_url.'/profiles/starter_kit/modules/custom/import_default_content/banner-image/default-video-gallery-image.jpg');
    $file = file_save_data($data, 'public://video-gallery-4.jpg', FILE_EXISTS_REPLACE);
    $node = \Drupal::entityTypeManager()->getStorage('node')->create(array(
      'type'        => 'video_gallery',
      'title'       => 'A Few Tips for Scaling Up Web Performance',
      'body'        => '',
      'field_featured_image_for_gallery' => [
        'target_id' => $file->id(),
        'alt' => 'IT',
        'title' => 'IT'
      ],
      'field_youtube_video' => 'https://www.youtube.com/watch?v=94NuFTMBBOY',
      'field_featured_video_gallery' => '1',
      'field_link_to' => 'https://www.google.com/',
    ));
    $node->save();

    $data = file_get_contents( $base_url.'/profiles/starter_kit/modules/custom/import_default_content/banner-image/default-video-gallery-image.jpg');
    $file = file_save_data($data, 'public://video-gallery-5.jpg', FILE_EXISTS_REPLACE);
    $node = \Drupal::entityTypeManager()->getStorage('node')->create(array(
      'type'        => 'video_gallery',
      'title'       => 'Making sense of bitcoin, cryptocurrency, and blockchain',
      'body'        => '',
      'field_featured_image_for_gallery' => [
        'target_id' => $file->id(),
        'alt' => 'IT',
        'title' => 'IT'
      ],
      'field_youtube_video' => 'https://www.youtube.com/watch?v=VMSIKJX7B2s',
      'field_featured_video_gallery' => '1',
      'field_link_to' => 'https://www.google.com/',
    ));
    $node->save();

    // About Us page
    $node = \Drupal::entityTypeManager()->getStorage('node')->create(array(
      'type'        => 'page',
      'title'       => 'About Us',
      'body'        => array(
        'value'     => '<h2>What is Lorem Ipsum?</h2>
                        <p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                        </div>
                        <div>
                        <h2>Why do we use it?</h2>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                        </div>
                        <div>
                        <h2>Where does it come from?</h2>
                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>
                        <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>
                        </div>',
        'format' => 'full_html',
      ),
    ));
    $node->save();

    // Services page
    $node = \Drupal::entityTypeManager()->getStorage('node')->create(array(
      'type'        => 'page',
      'title'       => 'Services',
      'body'        => array(
        'value'     => '<h2>What is Lorem Ipsum?</h2>
                        <p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                        </div>
                        <div>
                        <h2>Why do we use it?</h2>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                        </div>
                        <div>
                        <h2>Where does it come from?</h2>
                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>
                        <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>
                        </div>',
        'format' => 'full_html',
      ),
    ));
    $node->save();

    // Disclaimer page
    $node = \Drupal::entityTypeManager()->getStorage('node')->create(array(
      'type'        => 'page',
      'title'       => 'Disclaimer',
      'body'        => array(
        'value'     => '<h2>What is Lorem Ipsum?</h2>
                        <p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                        </div>
                        <div>
                        <h2>Why do we use it?</h2>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                        </div>
                        <div>
                        <h2>Where does it come from?</h2>
                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>
                        <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>
                        </div>',
        'format' => 'full_html',
      ),
    ));
    $node->save();

    // Terms & Conditions page
    $node = \Drupal::entityTypeManager()->getStorage('node')->create(array(
      'type'        => 'page',
      'title'       => 'Terms & Conditions',
      'body'        => array(
        'value'     => '<h2>What is Lorem Ipsum?</h2>
                        <p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                        </div>
                        <div>
                        <h2>Why do we use it?</h2>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                        </div>
                        <div>
                        <h2>Where does it come from?</h2>
                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>
                        <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>
                        </div>',
        'format' => 'full_html',
      ),
    ));
    $node->save();

    // Privacy Policy page
    $node = \Drupal::entityTypeManager()->getStorage('node')->create(array(
      'type'        => 'page',
      'title'       => 'Privacy Policy',
      'body'        => array(
        'value'     => '<h2>What is Lorem Ipsum?</h2>
                        <p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                        </div>
                        <div>
                        <h2>Why do we use it?</h2>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                        </div>
                        <div>
                        <h2>Where does it come from?</h2>
                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>
                        <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>
                        </div>',
        'format' => 'full_html',
      ),
    ));
    $node->save();  

    // About Us Banner Page
    $about_us_page_node_id = \Drupal::database()->select('node_field_data', 'n')
            ->fields('n', array('nid'))
            ->condition('type', 'page', '=')
            ->condition('title', 'About Us', '=')
            ->execute()->fetchAssoc(); 
    $data = file_get_contents($base_url. '/profiles/starter_kit/modules/custom/import_default_content/banner-image/background-default-3.jpg');
    $file = file_save_data($data, 'public://about-us-banner.jpg', FILE_EXISTS_REPLACE);
    $node = \Drupal::entityTypeManager()->getStorage('node')->create(array(
      'type'        => 'banner',
      'title'       => 'About Us Banner',
      'body'        => '',
      'field_banner_image' => [
        'target_id' => $file->id(),
        'alt' => 'IT',
        'title' => 'IT'
      ],
      'field_banner_type' => 'Innerpage',
      'field_banner_for'  => $about_us_page_node_id['nid'],
    ));
    $node->save();

    // Services Banner Page
    $services_page_node_id = \Drupal::database()->select('node_field_data', 'n')
            ->fields('n', array('nid'))
            ->condition('type', 'page', '=')
            ->condition('title', 'Services', '=')
            ->execute()->fetchAssoc(); 
    $data = file_get_contents($base_url. '/profiles/starter_kit/modules/custom/import_default_content/banner-image/background-default-4.jpg');
    $file = file_save_data($data, 'public://services-banner.jpg', FILE_EXISTS_REPLACE);
    $node = \Drupal::entityTypeManager()->getStorage('node')->create(array(
      'type'        => 'banner',
      'title'       => 'Services Banner',
      'body'        => '',
      'field_banner_image' => [
        'target_id' => $file->id(),
        'alt' => 'IT',
        'title' => 'IT'
      ],
      'field_banner_type' => 'Innerpage',
      'field_banner_for'  => $services_page_node_id['nid'],
    ));
    $node->save();

    drupal_set_message('Nodes have been created successfully.', 'status'); 

    // News category taxonomy content
    $term = Term::create([
      'name' => 'Bollywood',
      'vid' => 'news_category',
    ])
    ->save();

    $term = Term::create([
      'name' => 'Agricultural',
      'vid' => 'news_category',
    ])
    ->save();

    $term = Term::create([
      'name' => 'Entertainment',
      'vid' => 'news_category',
    ])
    ->save();

    $term = Term::create([
      'name' => 'Aerospace',
      'vid' => 'news_category',
    ])
    ->save();

    $term = Term::create([
      'name' => 'Media',
      'vid' => 'news_category',
    ])
    ->save();

    $term = Term::create([
      'name' => 'Medical',
      'vid' => 'news_category',
    ])
    ->save();

    $term = Term::create([
      'name' => 'Hospitality',
      'vid' => 'news_category',
    ])
    ->save();

    $term = Term::create([
      'name' => 'Real Estate',
      'vid' => 'news_category',
    ])
    ->save();

    $term = Term::create([
      'name' => 'Hollywood',
      'vid' => 'news_category',
    ])
    ->save();

    $term = Term::create([
      'name' => 'Banking & Finance',
      'vid' => 'news_category',
    ])
    ->save();

    drupal_set_message('Taxonomy terms have been created successfully.', 'status'); 

    $main_menu = \Drupal::database()->select('node_field_data', 'n')
            ->fields('n', array('nid', 'title'))
            ->condition('type', 'page', '=')
            ->condition('title', array('Services','About Us'), 'IN')
            ->execute()->fetchAll();
    foreach ($main_menu as $value) {
      $menu_link = MenuLinkContent::create([
        'title' => $value->title,
        'link' => ['uri' => 'internal:/node/' . $value->nid],
        'menu_name' => 'main',
        'expanded' => TRUE,
      ]);
      $menu_link->save();
    }

    $footer_menu = \Drupal::database()->select('node_field_data', 'n')
            ->fields('n', array('nid', 'title'))
            ->condition('type', 'page', '=')
            ->condition('title', array('Disclaimer','Terms & Conditions', 'Privacy Policy'), 'IN')
            ->execute()->fetchAll();
    foreach ($footer_menu as $value) {
      $menu_link = MenuLinkContent::create([
        'title' => $value->title,
        'link' => ['uri' => 'internal:/node/' . $value->nid],
        'menu_name' => 'footer',
        'expanded' => TRUE,
      ]);
      $menu_link->save();
    }

    drupal_set_message('Menu items have been created successfully.', 'status');

  }

}
