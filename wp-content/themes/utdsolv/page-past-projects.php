<?php get_header(); ?> 
     
     <!-- Page Content -->
        <main>
            <div class="wrapper">
                <div>
                    <h1>Past Projects</h1>
                    <hr class="hr-rule">
                </div>
                <div class="row row--gutters">
                    <div class="row__large-45">
                        <h2 class="headline">UTDSolv Previous Projects</h2>
                        <p>UTDsolv has worked with many companies in various
                            areas
                            (e.g., supply chain management, marketing,
                            information
                            technology, healthcare management, finance) and
                            completed many related projects (e.g., Strategy and
                            Growth, Information Technology, Data Analytics,
                            Market
                            Research and Analysis, Financial Modeling,
                            Healthcare,
                            Transportation and Logistics).</p>
                    </div>
                    <div class="row__large-45">
                        <figure>
                            <img src="https://placeholder.com/750x450" alt>
                        </figure>
                    </div>
                </div>
                <div class="page-section">
                    <div class="search-filter-box">
						<form method="get" action="<?php echo esc_url( home_url( '/past-projects' ) ); ?>">
						    <input class="x" type="text" name="keyword_search" placeholder="Enter keyword search">
                        <div class="input-group">
                            <div class="input-group-item">
                                <input class="x" type="text"  name="sponsor_name"  placeholder="Sponsor Name">
                            </div>
                            <div class="input-group-item">
                                <select name="industry">
                                    <option value>Select Industry</option>
                                    <option value="Advertising">All
                                        Industries</option>
                                    <option
                                        value="Advertising">Advertising</option>
                                    <option value="Aerospace">Aerospace</option>
                                    <option
                                        value="Agriculture/Forestry/Fishing & Hunting">Agriculture/Forestry/Fishing
                                        & Hunting</option>
                                    <option
                                        value="Apparel & Accessories">Apparel &
                                        Accessories</option>
                                    <option value="Art & Design">Art &
                                        Design</option>
                                    <option
                                        value="Automotive">Automotive</option>
                                    <option
                                        value="Banking, Finance & Insurance">Banking,
                                        Finance & Insurance</option>
                                    <option
                                        value="Biotechnology">Biotechnology</option>
                                    <option value="Chemicals">Chemicals</option>
                                    <option
                                        value="Construction">Construction</option>
                                    <option
                                        value="Consulting">Consulting</option>
                                    <option
                                        value="Consumer Electronics">Consumer
                                        Electronics</option>
                                    <option value="Consumer Products">Consumer
                                        Products</option>
                                    <option value="Defense">Defense</option>
                                    <option value="Education">Education</option>
                                    <option value="Energy">Energy</option>
                                    <option
                                        value="Engineering">Engineering</option>
                                    <option
                                        value="Environmental">Environmental</option>
                                    <option
                                        value="Film, Music, Television and Publishing">Film,
                                        Music, Television and
                                        Publishing</option>
                                    <option value="Fitness & Recreation">Fitness
                                        & Recreation</option>
                                    <option
                                        value="Food, Beverage & Tobacco">Food,
                                        Beverage & Tobacco</option>
                                    <option
                                        value="Furniture & Interior Design">Furniture
                                        & Interior Design</option>
                                    <option value="Grocery">Grocery</option>
                                    <option value="Health & Beaty">Health &
                                        Beaty</option>
                                    <option value="Health Services">Health
                                        Services</option>
                                    <option
                                        value="Healthcare">Healthcare</option>
                                    <option
                                        value="International Relations and Development">International
                                        Relations and Development</option>
                                    <option value="Legal">Legal</option>
                                    <option
                                        value="Leisure and Hospitality">Leisure
                                        and Hospitality</option>
                                    <option
                                        value="Manufacturing">Manufacturing</option>
                                    <option
                                        value="Mining, Oil and Gas Extraction">Mining,
                                        Oil and Gas Extraction</option>
                                    <option value="Other">Other</option>
                                    <option
                                        value="Pharmaceuticals">Pharmaceuticals</option>
                                    <option
                                        value="Pro-Business Services">Pro-Business
                                        Services</option>
                                    <option
                                        value="Property Rental and Management">Property
                                        Rental and Management</option>
                                    <option value="Real Estate">Real
                                        Estate</option>
                                    <option
                                        value="Retail or Wholesale Trade">Retail
                                        or Wholesale Trade</option>
                                    <option
                                        value="Safety and Quality Control">Safety
                                        and Quality Control</option>
                                    <option
                                        value="Securities and Commodities Exchange">Securities
                                        and Commodities Exchange</option>
                                    <option value="Software">Software</option>
                                    <option
                                        value="Staffing and Recruiting">Staffing
                                        and Recruiting</option>
                                    <option value="Technology and IT">Technology
                                        and IT</option>
                                    <option
                                        value="Telecommunications">Telecommunications</option>
                                    <option value="Tourism">Tourism</option>
                                    <option
                                        value="Transportation and Warehousing">Transportation
                                        and Warehousing</option>
                                    <option value="Utilities">Utilities</option>
                                    <option
                                        value="Waste Management and Cleaning">Waste
                                        Management and Cleaning</option>
                                </select>

                            </div>
                        </div>
                        <div class="input-group">
                            <div class="input-group-item">
                            <select name="semester" id="semester">
                                <option value="">Semester</option>
                                <option value="Spring 2020">Spring 2020</option>
                                <option value="Summer 2020">Summer 2020</option>
                                <option value="Fall 2020">Fall 2020</option>
                                <option value="Spring 2021">Spring 2021</option>
                                <option value="Summer 2021">Summer 2021</option>
                                <option value="Fall 2021">Fall 2021</option>
                                <option value="Spring 2022">Spring 2022</option>
                                <option value="Summer 2022">Summer 2022</option>
                                <option value="Fall 2022">Fall 2022</option>
                                <option value="Spring 2023">Spring 2023</option>
                                <option value="Summer 2023">Summer 2023</option>
                                <option value="Fall 2023">Fall 2023</option>
                                <option value="Spring 2024">Spring 2024</option>
                                <option value="Summer 2024">Summer 2024</option>
                                <option value="Fall 2024">Fall 2024</option>
                                <option value="Spring 2025">Spring 2025</option>
                                <option value="Summer 2025">Summer 2025</option>
                                <option value="Fall 2025">Fall 2025</option>
                            </select>
                            </div>
                            <div class="input-group-item">
                                <select name="academic_area">
                                    <option value>Academic Area</option>
                                    <option value="ITSS 4395">ITSS 4395</option>
                                    <option value="BPS 4395">BPS 4395</option>
                                    <option value="MKT 4395">MKT 4395</option>
                                    <option value="OPRE 6367">OPRE 6367</option>
                                    <option value="OPRE 4395">OPRE 4395</option>
                                    <option value="HMGT 4395">HMGT 4395</option>
                                    <option value="OPRE 4395 + Math Sci">OPRE 4395 + Math Sci</option>

                                    <!-- Add more options as needed -->
                                </select>
                            </div>
                        </div>
                        <button class="btn btn-orange"
                            type="submit">Search</button>

						</form>
     
                    </div>

                </div>
                <div class="page-section">
                   <!-- Display Search here -->
                   <?php
            if ( isset( $_GET['keyword_search'] ) || isset( $_GET['sponsor_name'] ) || isset( $_GET['industry'] ) || isset( $_GET['semester'] ) || isset( $_GET['academic_area'] ) ) {
                // Build search query arguments
                $args = array(
                    'post_type' => 'project',
                    'posts_per_page' => -1, // Retrieve all matching posts
                );

                // Keyword search
                if ( isset( $_GET['keyword_search'] ) && ! empty( $_GET['keyword_search'] ) ) {
                    $args['s'] = sanitize_text_field( $_GET['keyword_search'] );
                }

                // Other input fields
                if ( isset( $_GET['sponsor_name'] ) && ! empty( $_GET['sponsor_name'] ) ) {
                    $args['meta_query'][] = array(
                        'key' => 'project_sponsor_name',
                        'value' => sanitize_text_field( $_GET['sponsor_name'] ),
                        'compare' => 'LIKE',
                    );
                }
                if ( isset( $_GET['industry'] ) && ! empty( $_GET['industry'] ) ) {
                    $args['meta_query'][] = array(
                        'key' => 'project_industry',
                        'value' => sanitize_text_field( $_GET['industry'] ),
                        'compare' => '=',
                    );
                }
                if ( isset( $_GET['semester'] ) && ! empty( $_GET['semester'] ) ) {
                    $args['meta_query'][] = array(
                        'key' => 'project_semester',
                        'value' => sanitize_text_field( $_GET['semester'] ),
                        'compare' => '=',
                    );
                }
                if ( isset( $_GET['academic_area'] ) && ! empty( $_GET['academic_area'] ) ) {
                    $args['meta_query'][] = array(
                        'key' => 'project_academic_area', // Custom field key
                        'value' => sanitize_text_field( $_GET['academic_area'] ),
                        'compare' => '=',
                    );
                }
                
                // Perform the search query
                $search_query = new WP_Query( $args );

                // Display search results
                if ( $search_query->have_posts() ) :
                    while ( $search_query->have_posts() ) : $search_query->the_post();
                        ?>
                        <div class="search-result">
                            <h3><?php the_title(); ?></h3>
                            <!-- Additional information if needed -->
                        </div>
                        <?php
                    endwhile;
                    wp_reset_postdata();
                else :
                    echo '<p>No projects found.</p>';
                endif;
            }
            ?>
                </div>
         </div>
    </main>

 <?php get_footer(); ?> 