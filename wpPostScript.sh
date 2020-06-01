#!/bin/sh
echo $(date) runing shell...

WP_POST_ID=$(/usr/local/bin/php /usr/local/bin/wp post create --post_type=page --post_title='Approaching Retirement – There are no “do-overs”' --post_name='/approaching-retirement' --page_template='page-templates/bc-subpage-sidebar.php' --porcelain)
if [ $? -eq 0 ];then
/usr/local/bin/php /usr/local/bin/wp post update $WP_POST_ID --post_status='publish' --meta_input='{"rank_math_description":"n/a", "rank_math_permalink":"/approaching-retirement","rank_math_title":"n/a"}'
  if [ $? -ne 0 ];then
    echo Post Update Failed
  fi
else
  echo Post Create Failed
fi
echo post_id: $WP_POST_ID
echo post_title:'Approaching Retirement – There are no “do-overs”'
echo post_type:'page'
echo '*****'


WP_POST_ID=$(/usr/local/bin/php /usr/local/bin/wp post create --post_type=page --post_title='Settled into Retirement – And wanting to stay that way' --post_name='/settled-into-retirement' --page_template='page-templates/bc-subpage-sidebar.php' --porcelain)
if [ $? -eq 0 ];then
/usr/local/bin/php /usr/local/bin/wp post update $WP_POST_ID --post_status='publish' --meta_input='{"rank_math_description":"n/a", "rank_math_permalink":"/settled-into-retirement","rank_math_title":"n/a"}'
  if [ $? -ne 0 ];then
    echo Post Update Failed
  fi
else
  echo Post Create Failed
fi
echo post_id: $WP_POST_ID
echo post_title:'Settled into Retirement – And wanting to stay that way'
echo post_type:'page'
echo '*****'


WP_POST_ID=$(/usr/local/bin/php /usr/local/bin/wp post create --post_type=page --post_title='Life Changes – Adapt and thrive' --post_name='/life-changes' --page_template='page-templates/bc-subpage-sidebar.php' --porcelain)
if [ $? -eq 0 ];then
/usr/local/bin/php /usr/local/bin/wp post update $WP_POST_ID --post_status='publish' --meta_input='{"rank_math_description":"n/a", "rank_math_permalink":"/life-changes","rank_math_title":"n/a"}'
  if [ $? -ne 0 ];then
    echo Post Update Failed
  fi
else
  echo Post Create Failed
fi
echo post_id: $WP_POST_ID
echo post_title:'Life Changes – Adapt and thrive'
echo post_type:'page'
echo '*****'


WP_POST_ID=$(/usr/local/bin/php /usr/local/bin/wp post create --post_type=page --post_title='Mid-Career - Building wealth' --post_name='/mid-career' --page_template='page-templates/bc-subpage-sidebar.php' --porcelain)
if [ $? -eq 0 ];then
/usr/local/bin/php /usr/local/bin/wp post update $WP_POST_ID --post_status='publish' --meta_input='{"rank_math_description":"n/a", "rank_math_permalink":"/mid-career","rank_math_title":"n/a"}'
  if [ $? -ne 0 ];then
    echo Post Update Failed
  fi
else
  echo Post Create Failed
fi
echo post_id: $WP_POST_ID
echo post_title:'Mid-Career - Building wealth'
echo post_type:'page'
echo '*****'


WP_POST_ID=$(/usr/local/bin/php /usr/local/bin/wp post create --post_type=page --post_title='Starting Out - Solid foundation' --post_name='/starting-out' --page_template='page-templates/bc-subpage-sidebar.php' --porcelain)
if [ $? -eq 0 ];then
/usr/local/bin/php /usr/local/bin/wp post update $WP_POST_ID --post_status='publish' --meta_input='{"rank_math_description":"n/a", "rank_math_permalink":"/starting-out","rank_math_title":"n/a"}'
  if [ $? -ne 0 ];then
    echo Post Update Failed
  fi
else
  echo Post Create Failed
fi
echo post_id: $WP_POST_ID
echo post_title:'Starting Out - Solid foundation'
echo post_type:'page'
echo '*****'


WP_POST_ID=$(/usr/local/bin/php /usr/local/bin/wp post create --post_type=page --post_title='Charitable Giving – For now, for the future' --post_name='/charitable-giving' --page_template='page-templates/bc-subpage-sidebar.php' --porcelain)
if [ $? -eq 0 ];then
/usr/local/bin/php /usr/local/bin/wp post update $WP_POST_ID --post_status='publish' --meta_input='{"rank_math_description":"n/a", "rank_math_permalink":"/charitable-giving","rank_math_title":"n/a"}'
  if [ $? -ne 0 ];then
    echo Post Update Failed
  fi
else
  echo Post Create Failed
fi
echo post_id: $WP_POST_ID
echo post_title:'Charitable Giving – For now, for the future'
echo post_type:'page'
echo '*****'


WP_POST_ID=$(/usr/local/bin/php /usr/local/bin/wp post create --post_type=page --post_title='Entrepreneurs – Crafting your own path' --post_name='/entrepreneurs' --page_template='page-templates/bc-subpage-sidebar.php' --porcelain)
if [ $? -eq 0 ];then
/usr/local/bin/php /usr/local/bin/wp post update $WP_POST_ID --post_status='publish' --meta_input='{"rank_math_description":"n/a", "rank_math_permalink":"/entrepreneurs","rank_math_title":"n/a"}'
  if [ $? -ne 0 ];then
    echo Post Update Failed
  fi
else
  echo Post Create Failed
fi
echo post_id: $WP_POST_ID
echo post_title:'Entrepreneurs – Crafting your own path'
echo post_type:'page'
echo '*****'


WP_POST_ID=$(/usr/local/bin/php /usr/local/bin/wp post create --post_type=page --post_title='Our Team' --post_name='https://www.xmlfg.com/about-xml/our-team/' --page_template='page-templates/bc-teampage.php' --porcelain)
if [ $? -eq 0 ];then
/usr/local/bin/php /usr/local/bin/wp post update $WP_POST_ID --post_status='publish' --meta_input='{"rank_math_description":"Here, viewers can find biographical information on the investment and wealth management consultants at the XML Financial Group.", "rank_math_permalink":"https://www.xmlfg.com/about-xml/our-team/","rank_math_title":"XML Financial Group | Maryland Financial Consultants | Investment Consultants | Wealth Management Advisors"}'
  if [ $? -ne 0 ];then
    echo Post Update Failed
  fi
else
  echo Post Create Failed
fi
echo post_id: $WP_POST_ID
echo post_title:'Our Team'
echo post_type:'page'
echo '*****'


WP_POST_ID=$(/usr/local/bin/php /usr/local/bin/wp post create --post_type=page --post_title='Philanthropy' --post_name='philanthropy' --page_template='page-templates/bc-subpage-sidebar.php' --porcelain)
if [ $? -eq 0 ];then
/usr/local/bin/php /usr/local/bin/wp post update $WP_POST_ID --post_status='publish' --meta_input='{"rank_math_description":"The financial consultants at the XML Financial Group explain the wealth management and investment services offered to nonprofits and charities.", "rank_math_permalink":"philanthropy","rank_math_title":"XML Financial Group || NonProfit Financial Planning | Financial Consultants for NonProfits | Charity Investment Advisors"}'
  if [ $? -ne 0 ];then
    echo Post Update Failed
  fi
else
  echo Post Create Failed
fi
echo post_id: $WP_POST_ID
echo post_title:'Philanthropy'
echo post_type:'page'
echo '*****'


WP_POST_ID=$(/usr/local/bin/php /usr/local/bin/wp post create --post_type=page --post_title='Brokerage Services' --post_name='brokerage-services' --page_template='page-templates/bc-subpage-sidebar.php' --porcelain)
if [ $? -eq 0 ];then
/usr/local/bin/php /usr/local/bin/wp post update $WP_POST_ID --post_status='publish' --meta_input='{"rank_math_description":"n/a", "rank_math_permalink":"brokerage-services","rank_math_title":"Brokerage Services | XML Financial"}'
  if [ $? -ne 0 ];then
    echo Post Update Failed
  fi
else
  echo Post Create Failed
fi
echo post_id: $WP_POST_ID
echo post_title:'Brokerage Services'
echo post_type:'page'
echo '*****'


WP_POST_ID=$(/usr/local/bin/php /usr/local/bin/wp post create --post_type=page --post_title='Services' --post_name='services' --page_template='page-templates/bc-subpage-sidebar.php' --porcelain)
if [ $? -eq 0 ];then
/usr/local/bin/php /usr/local/bin/wp post update $WP_POST_ID --post_status='publish' --meta_input='{"rank_math_description":"The wealth management consultants at the XML Financial Group explain the investment and monetary services offered for individuals.", "rank_math_permalink":"services","rank_math_title":"XML Financial Group | Personal Financial Planning | Wealth Management Planning | Investment Planning"}'
  if [ $? -ne 0 ];then
    echo Post Update Failed
  fi
else
  echo Post Create Failed
fi
echo post_id: $WP_POST_ID
echo post_title:'Services'
echo post_type:'page'
echo '*****'


WP_POST_ID=$(/usr/local/bin/php /usr/local/bin/wp post create --post_type=page --post_title='Join Us' --post_name='advisor-consulting' --page_template='page-templates/bc-subpage-sidebar.php' --porcelain)
if [ $? -eq 0 ];then
/usr/local/bin/php /usr/local/bin/wp post update $WP_POST_ID --post_status='publish' --meta_input='{"rank_math_description":"The financial consultants at the XML Financial Group explain the wealth management and investment services offered to nonprofits and charities.", "rank_math_permalink":"advisor-consulting","rank_math_title":"XML Financial Group | Advisor Financial Planning | Financial Consultants for NonProfits | Charity Investment Advisors"}'
  if [ $? -ne 0 ];then
    echo Post Update Failed
  fi
else
  echo Post Create Failed
fi
echo post_id: $WP_POST_ID
echo post_title:'Join Us'
echo post_type:'page'
echo '*****'


WP_POST_ID=$(/usr/local/bin/php /usr/local/bin/wp post create --post_type=page --post_title='Resources' --post_name='resources' --page_template='page-templates/bc-subpage-sidebar.php' --porcelain)
if [ $? -eq 0 ];then
/usr/local/bin/php /usr/local/bin/wp post update $WP_POST_ID --post_status='publish' --meta_input='{"rank_math_description":"Wealth management and financial planning resources provided by the investment consulting experts at the XML Financial Group.", "rank_math_permalink":"resources","rank_math_title":"XML Financial Group |Financial Planning Tools | Financial Planning Process | Wealth Management Tools"}'
  if [ $? -ne 0 ];then
    echo Post Update Failed
  fi
else
  echo Post Create Failed
fi
echo post_id: $WP_POST_ID
echo post_title:'Resources'
echo post_type:'page'
echo '*****'


WP_POST_ID=$(/usr/local/bin/php /usr/local/bin/wp post create --post_type=page --post_title='Upcoming Events' --post_name='xml-events' --page_template='page-templates/bc-subpage-sidebar.php' --porcelain)
if [ $? -eq 0 ];then
/usr/local/bin/php /usr/local/bin/wp post update $WP_POST_ID --post_status='publish' --meta_input='{"rank_math_description":"n/a", "rank_math_permalink":"xml-events","rank_math_title":"Events | XML Financial"}'
  if [ $? -ne 0 ];then
    echo Post Update Failed
  fi
else
  echo Post Create Failed
fi
echo post_id: $WP_POST_ID
echo post_title:'Upcoming Events'
echo post_type:'page'
echo '*****'


WP_POST_ID=$(/usr/local/bin/php /usr/local/bin/wp post create --post_type=page --post_title='Podcasts' --post_name='podcasts' --page_template='page-templates/bc-subpage-sidebar.php' --porcelain)
if [ $? -eq 0 ];then
/usr/local/bin/php /usr/local/bin/wp post update $WP_POST_ID --post_status='publish' --meta_input='{"rank_math_description":"n/a", "rank_math_permalink":"podcasts","rank_math_title":"Common Sense Investing | Podcast Episodes"}'
  if [ $? -ne 0 ];then
    echo Post Update Failed
  fi
else
  echo Post Create Failed
fi
echo post_id: $WP_POST_ID
echo post_title:'Podcasts'
echo post_type:'page'
echo '*****'


WP_POST_ID=$(/usr/local/bin/php /usr/local/bin/wp post create --post_type=page --post_title='In The News' --post_name='in-the-news' --page_template='page-templates/bc-subpage-sidebar.php' --porcelain)
if [ $? -eq 0 ];then
/usr/local/bin/php /usr/local/bin/wp post update $WP_POST_ID --post_status='publish' --meta_input='{"rank_math_description":"Links to media publications which feature the investment and wealth management advisors at the XML Financial Group.", "rank_math_permalink":"in-the-news","rank_math_title":"XML Financial Group || Wealth Management Consultants in Maryland | Financial Services News | Investment Consulting News"}'
  if [ $? -ne 0 ];then
    echo Post Update Failed
  fi
else
  echo Post Create Failed
fi
echo post_id: $WP_POST_ID
echo post_title:'In The News'
echo post_type:'page'
echo '*****'


WP_POST_ID=$(/usr/local/bin/php /usr/local/bin/wp post create --post_type=page --post_title='Brett’s Podcast On Raising Entrepreneurial Kids' --post_name='raising-entrepreneurial-kids' --page_template='page-templates/bc-subpage-sidebar.php' --porcelain)
if [ $? -eq 0 ];then
/usr/local/bin/php /usr/local/bin/wp post update $WP_POST_ID --post_status='publish' --meta_input='{"rank_math_description":"n/a", "rank_math_permalink":"raising-entrepreneurial-kids","rank_math_title":"Brett’s Podcast On Raising Entrepreneurial Kids | XML Financial"}'
  if [ $? -ne 0 ];then
    echo Post Update Failed
  fi
else
  echo Post Create Failed
fi
echo post_id: $WP_POST_ID
echo post_title:'Brett’s Podcast On Raising Entrepreneurial Kids'
echo post_type:'page'
echo '*****'


WP_POST_ID=$(/usr/local/bin/php /usr/local/bin/wp post create --post_type=page --post_title='XML Shark Tank Funding' --post_name='xml-shark-tank-funding/' --page_template='page-templates/bc-subpage-sidebar.php' --porcelain)
if [ $? -eq 0 ];then
/usr/local/bin/php /usr/local/bin/wp post update $WP_POST_ID --post_status='publish' --meta_input='{"rank_math_description":"n/a", "rank_math_permalink":"xml-shark-tank-funding/","rank_math_title":"XML Shark Tank Funding | XML Financial"}'
  if [ $? -ne 0 ];then
    echo Post Update Failed
  fi
else
  echo Post Create Failed
fi
echo post_id: $WP_POST_ID
echo post_title:'XML Shark Tank Funding'
echo post_type:'page'
echo '*****'


WP_POST_ID=$(/usr/local/bin/php /usr/local/bin/wp post create --post_type=page --post_title='Newsletter Archive' --post_name='newsletter-archive' --page_template='page-templates/bc-subpage-sidebar.php' --porcelain)
if [ $? -eq 0 ];then
/usr/local/bin/php /usr/local/bin/wp post update $WP_POST_ID --post_status='publish' --meta_input='{"rank_math_description":"n/a", "rank_math_permalink":"newsletter-archive","rank_math_title":"Newsletter Archive | XML Financial"}'
  if [ $? -ne 0 ];then
    echo Post Update Failed
  fi
else
  echo Post Create Failed
fi
echo post_id: $WP_POST_ID
echo post_title:'Newsletter Archive'
echo post_type:'page'
echo '*****'


WP_POST_ID=$(/usr/local/bin/php /usr/local/bin/wp post create --post_type=page --post_title='Announcements' --post_name='announcements' --page_template='page-templates/bc-subpage-sidebar.php' --porcelain)
if [ $? -eq 0 ];then
/usr/local/bin/php /usr/local/bin/wp post update $WP_POST_ID --post_status='publish' --meta_input='{"rank_math_description":"n/a", "rank_math_permalink":"announcements","rank_math_title":"Announcements | XML Financial"}'
  if [ $? -ne 0 ];then
    echo Post Update Failed
  fi
else
  echo Post Create Failed
fi
echo post_id: $WP_POST_ID
echo post_title:'Announcements'
echo post_type:'page'
echo '*****'


WP_POST_ID=$(/usr/local/bin/php /usr/local/bin/wp post create --post_type=page --post_title='The Focus Partnership' --post_name='focus-partnership' --page_template='page-templates/bc-subpage-sidebar.php' --porcelain)
if [ $? -eq 0 ];then
/usr/local/bin/php /usr/local/bin/wp post update $WP_POST_ID --post_status='publish' --meta_input='{"rank_math_description":"n/a", "rank_math_permalink":"focus-partnership","rank_math_title":"The Focus Partnership | XML Financial"}'
  if [ $? -ne 0 ];then
    echo Post Update Failed
  fi
else
  echo Post Create Failed
fi
echo post_id: $WP_POST_ID
echo post_title:'The Focus Partnership'
echo post_type:'page'
echo '*****'


WP_POST_ID=$(/usr/local/bin/php /usr/local/bin/wp post create --post_type=page --post_title='Articles of Interest' --post_name='articles-and-news' --page_template='page-templates/bc-subpage-sidebar.php' --porcelain)
if [ $? -eq 0 ];then
/usr/local/bin/php /usr/local/bin/wp post update $WP_POST_ID --post_status='publish' --meta_input='{"rank_math_description":"n/a", "rank_math_permalink":"articles-and-news","rank_math_title":"Articles of Interest | XML Financial"}'
  if [ $? -ne 0 ];then
    echo Post Update Failed
  fi
else
  echo Post Create Failed
fi
echo post_id: $WP_POST_ID
echo post_title:'Articles of Interest'
echo post_type:'page'
echo '*****'


WP_POST_ID=$(/usr/local/bin/php /usr/local/bin/wp post create --post_type=page --post_title='Business Continuity Plan' --post_name='business-continuity-plan' --page_template='page-templates/bc-subpage-sidebar.php' --porcelain)
if [ $? -eq 0 ];then
/usr/local/bin/php /usr/local/bin/wp post update $WP_POST_ID --post_status='publish' --meta_input='{"rank_math_description":"n/a", "rank_math_permalink":"business-continuity-plan","rank_math_title":"Business Continuity Plan | XML Financial"}'
  if [ $? -ne 0 ];then
    echo Post Update Failed
  fi
else
  echo Post Create Failed
fi
echo post_id: $WP_POST_ID
echo post_title:'Business Continuity Plan'
echo post_type:'page'
echo '*****'


WP_POST_ID=$(/usr/local/bin/php /usr/local/bin/wp post create --post_type=page --post_title='Important Notices' --post_name='important-notices' --page_template='page-templates/bc-subpage-sidebar.php' --porcelain)
if [ $? -eq 0 ];then
/usr/local/bin/php /usr/local/bin/wp post update $WP_POST_ID --post_status='publish' --meta_input='{"rank_math_description":"n/a", "rank_math_permalink":"important-notices","rank_math_title":"Important Notices | XML Financial"}'
  if [ $? -ne 0 ];then
    echo Post Update Failed
  fi
else
  echo Post Create Failed
fi
echo post_id: $WP_POST_ID
echo post_title:'Important Notices'
echo post_type:'page'
echo '*****'


WP_POST_ID=$(/usr/local/bin/php /usr/local/bin/wp post create --post_type=page --post_title='Website Terms and Privacy Policy' --post_name='terms-of-use' --page_template='page-templates/bc-subpage-sidebar.php' --porcelain)
if [ $? -eq 0 ];then
/usr/local/bin/php /usr/local/bin/wp post update $WP_POST_ID --post_status='publish' --meta_input='{"rank_math_description":"", "rank_math_permalink":"terms-of-use","rank_math_title":"Website Terms and Privacy Policy | XML Financial"}'
  if [ $? -ne 0 ];then
    echo Post Update Failed
  fi
else
  echo Post Create Failed
fi
echo post_id: $WP_POST_ID
echo post_title:'Website Terms and Privacy Policy'
echo post_type:'page'
echo '*****'


WP_POST_ID=$(/usr/local/bin/php /usr/local/bin/wp post create --post_type=bc_teams --post_title='Beth Levine' --post_name='beth-levine' --porcelain)
if [ $? -eq 0 ];then
/usr/local/bin/php /usr/local/bin/wp post update $WP_POST_ID --post_status='publish' --meta_input='{"rank_math_description":"n/a", "rank_math_permalink":"beth-levine","rank_math_title":"Beth Levine | XML Financial"}'
  if [ $? -ne 0 ];then
    echo Post Update Failed
  fi
else
  echo Post Create Failed
fi
echo post_id: $WP_POST_ID
echo post_title:'Beth Levine'
echo post_type:'bc_teams'
echo '*****'


WP_POST_ID=$(/usr/local/bin/php /usr/local/bin/wp post create --post_type=bc_teams --post_title='Bob Abel, CPA' --post_name='bob-abel' --porcelain)
if [ $? -eq 0 ];then
/usr/local/bin/php /usr/local/bin/wp post update $WP_POST_ID --post_status='publish' --meta_input='{"rank_math_description":"n/a", "rank_math_permalink":"bob-abel","rank_math_title":"Bob Abel, CPA | XML FInancial"}'
  if [ $? -ne 0 ];then
    echo Post Update Failed
  fi
else
  echo Post Create Failed
fi
echo post_id: $WP_POST_ID
echo post_title:'Bob Abel, CPA'
echo post_type:'bc_teams'
echo '*****'


WP_POST_ID=$(/usr/local/bin/php /usr/local/bin/wp post create --post_type=bc_teams --post_title='Brett Shane Bernstein, CFP&reg;' --post_name='brett-shane-bernstein' --porcelain)
if [ $? -eq 0 ];then
/usr/local/bin/php /usr/local/bin/wp post update $WP_POST_ID --post_status='publish' --meta_input='{"rank_math_description":"n/a", "rank_math_permalink":"brett-shane-bernstein","rank_math_title":"Brett Shane Bernstein, CFP&reg; | XML Financial"}'
  if [ $? -ne 0 ];then
    echo Post Update Failed
  fi
else
  echo Post Create Failed
fi
echo post_id: $WP_POST_ID
echo post_title:'Brett Shane Bernstein, CFP&reg;'
echo post_type:'bc_teams'
echo '*****'


WP_POST_ID=$(/usr/local/bin/php /usr/local/bin/wp post create --post_type=bc_teams --post_title='Carlos Fuentes' --post_name='carlos-fuentes' --porcelain)
if [ $? -eq 0 ];then
/usr/local/bin/php /usr/local/bin/wp post update $WP_POST_ID --post_status='publish' --meta_input='{"rank_math_description":"n/a", "rank_math_permalink":"carlos-fuentes","rank_math_title":"Carlos Fuentes | XML Financial"}'
  if [ $? -ne 0 ];then
    echo Post Update Failed
  fi
else
  echo Post Create Failed
fi
echo post_id: $WP_POST_ID
echo post_title:'Carlos Fuentes'
echo post_type:'bc_teams'
echo '*****'


WP_POST_ID=$(/usr/local/bin/php /usr/local/bin/wp post create --post_type=bc_teams --post_title='David Margulies' --post_name='david-margulies' --porcelain)
if [ $? -eq 0 ];then
/usr/local/bin/php /usr/local/bin/wp post update $WP_POST_ID --post_status='publish' --meta_input='{"rank_math_description":"n/a", "rank_math_permalink":"david-margulies","rank_math_title":"David Margulies | XML Financial"}'
  if [ $? -ne 0 ];then
    echo Post Update Failed
  fi
else
  echo Post Create Failed
fi
echo post_id: $WP_POST_ID
echo post_title:'David Margulies'
echo post_type:'bc_teams'
echo '*****'


WP_POST_ID=$(/usr/local/bin/php /usr/local/bin/wp post create --post_type=bc_teams --post_title='Debbie Rayman' --post_name='debbie-rayman' --porcelain)
if [ $? -eq 0 ];then
/usr/local/bin/php /usr/local/bin/wp post update $WP_POST_ID --post_status='publish' --meta_input='{"rank_math_description":"n/a", "rank_math_permalink":"debbie-rayman","rank_math_title":"Debbie Rayman | XML Financial"}'
  if [ $? -ne 0 ];then
    echo Post Update Failed
  fi
else
  echo Post Create Failed
fi
echo post_id: $WP_POST_ID
echo post_title:'Debbie Rayman'
echo post_type:'bc_teams'
echo '*****'


WP_POST_ID=$(/usr/local/bin/php /usr/local/bin/wp post create --post_type=bc_teams --post_title='Eric Wightman' --post_name='eric-wightman' --porcelain)
if [ $? -eq 0 ];then
/usr/local/bin/php /usr/local/bin/wp post update $WP_POST_ID --post_status='publish' --meta_input='{"rank_math_description":"n/a", "rank_math_permalink":"eric-wightman","rank_math_title":"Eric Wightman | XML Financial"}'
  if [ $? -ne 0 ];then
    echo Post Update Failed
  fi
else
  echo Post Create Failed
fi
echo post_id: $WP_POST_ID
echo post_title:'Eric Wightman'
echo post_type:'bc_teams'
echo '*****'


WP_POST_ID=$(/usr/local/bin/php /usr/local/bin/wp post create --post_type=bc_teams --post_title='Ever Petruzziello' --post_name='ever-petruzziello' --porcelain)
if [ $? -eq 0 ];then
/usr/local/bin/php /usr/local/bin/wp post update $WP_POST_ID --post_status='publish' --meta_input='{"rank_math_description":"n/a", "rank_math_permalink":"ever-petruzziello","rank_math_title":"Ever Petruzziello | XML Financial"}'
  if [ $? -ne 0 ];then
    echo Post Update Failed
  fi
else
  echo Post Create Failed
fi
echo post_id: $WP_POST_ID
echo post_title:'Ever Petruzziello'
echo post_type:'bc_teams'
echo '*****'


WP_POST_ID=$(/usr/local/bin/php /usr/local/bin/wp post create --post_type=bc_teams --post_title='Gerardo Salazar' --post_name='gerardo-salazar' --porcelain)
if [ $? -eq 0 ];then
/usr/local/bin/php /usr/local/bin/wp post update $WP_POST_ID --post_status='publish' --meta_input='{"rank_math_description":"n/a", "rank_math_permalink":"gerardo-salazar","rank_math_title":"Gerardo Salazar | XML Financial"}'
  if [ $? -ne 0 ];then
    echo Post Update Failed
  fi
else
  echo Post Create Failed
fi
echo post_id: $WP_POST_ID
echo post_title:'Gerardo Salazar'
echo post_type:'bc_teams'
echo '*****'


WP_POST_ID=$(/usr/local/bin/php /usr/local/bin/wp post create --post_type=bc_teams --post_title='Gina M. Neild' --post_name='gina-neild' --porcelain)
if [ $? -eq 0 ];then
/usr/local/bin/php /usr/local/bin/wp post update $WP_POST_ID --post_status='publish' --meta_input='{"rank_math_description":"n/a", "rank_math_permalink":"gina-neild","rank_math_title":"Gina M. Neild | XML Financial"}'
  if [ $? -ne 0 ];then
    echo Post Update Failed
  fi
else
  echo Post Create Failed
fi
echo post_id: $WP_POST_ID
echo post_title:'Gina M. Neild'
echo post_type:'bc_teams'
echo '*****'


WP_POST_ID=$(/usr/local/bin/php /usr/local/bin/wp post create --post_type=bc_teams --post_title='Jaime Brown' --post_name='jaime-brown' --porcelain)
if [ $? -eq 0 ];then
/usr/local/bin/php /usr/local/bin/wp post update $WP_POST_ID --post_status='publish' --meta_input='{"rank_math_description":"n/a", "rank_math_permalink":"jaime-brown","rank_math_title":"Jaime Brown | XML Financial"}'
  if [ $? -ne 0 ];then
    echo Post Update Failed
  fi
else
  echo Post Create Failed
fi
echo post_id: $WP_POST_ID
echo post_title:'Jaime Brown'
echo post_type:'bc_teams'
echo '*****'


WP_POST_ID=$(/usr/local/bin/php /usr/local/bin/wp post create --post_type=bc_teams --post_title='Jason Elliot Klopman, CFP&reg;' --post_name='jason-klopman' --porcelain)
if [ $? -eq 0 ];then
/usr/local/bin/php /usr/local/bin/wp post update $WP_POST_ID --post_status='publish' --meta_input='{"rank_math_description":"n/a", "rank_math_permalink":"jason-klopman","rank_math_title":"Jason Elliot Klopman, CFP&reg; | XML Financial"}'
  if [ $? -ne 0 ];then
    echo Post Update Failed
  fi
else
  echo Post Create Failed
fi
echo post_id: $WP_POST_ID
echo post_title:'Jason Elliot Klopman, CFP&reg;'
echo post_type:'bc_teams'
echo '*****'


WP_POST_ID=$(/usr/local/bin/php /usr/local/bin/wp post create --post_type=bc_teams --post_title='Jason Larochelle' --post_name='jason-larochelle-' --porcelain)
if [ $? -eq 0 ];then
/usr/local/bin/php /usr/local/bin/wp post update $WP_POST_ID --post_status='publish' --meta_input='{"rank_math_description":"n/a", "rank_math_permalink":"jason-larochelle-","rank_math_title":"Jason Larochelle | XML Financial"}'
  if [ $? -ne 0 ];then
    echo Post Update Failed
  fi
else
  echo Post Create Failed
fi
echo post_id: $WP_POST_ID
echo post_title:'Jason Larochelle'
echo post_type:'bc_teams'
echo '*****'


WP_POST_ID=$(/usr/local/bin/php /usr/local/bin/wp post create --post_type=bc_teams --post_title='Jennifer Szaro, CRCP&reg;' --post_name='jennifer-l.-szaro-' --porcelain)
if [ $? -eq 0 ];then
/usr/local/bin/php /usr/local/bin/wp post update $WP_POST_ID --post_status='publish' --meta_input='{"rank_math_description":"n/a", "rank_math_permalink":"jennifer-l.-szaro-","rank_math_title":"Jennifer Szaro, CRCP&reg; | XML Financial"}'
  if [ $? -ne 0 ];then
    echo Post Update Failed
  fi
else
  echo Post Create Failed
fi
echo post_id: $WP_POST_ID
echo post_title:'Jennifer Szaro, CRCP&reg;'
echo post_type:'bc_teams'
echo '*****'


WP_POST_ID=$(/usr/local/bin/php /usr/local/bin/wp post create --post_type=bc_teams --post_title='John Sciuto' --post_name='john-sciuto' --porcelain)
if [ $? -eq 0 ];then
/usr/local/bin/php /usr/local/bin/wp post update $WP_POST_ID --post_status='publish' --meta_input='{"rank_math_description":"n/a", "rank_math_permalink":"john-sciuto","rank_math_title":"John Sciuto | XML Financial"}'
  if [ $? -ne 0 ];then
    echo Post Update Failed
  fi
else
  echo Post Create Failed
fi
echo post_id: $WP_POST_ID
echo post_title:'John Sciuto'
echo post_type:'bc_teams'
echo '*****'


WP_POST_ID=$(/usr/local/bin/php /usr/local/bin/wp post create --post_type=bc_teams --post_title='Jon Lowe' --post_name='jon-lowe' --porcelain)
if [ $? -eq 0 ];then
/usr/local/bin/php /usr/local/bin/wp post update $WP_POST_ID --post_status='publish' --meta_input='{"rank_math_description":"n/a", "rank_math_permalink":"jon-lowe","rank_math_title":"Jon Lowe"}'
  if [ $? -ne 0 ];then
    echo Post Update Failed
  fi
else
  echo Post Create Failed
fi
echo post_id: $WP_POST_ID
echo post_title:'Jon Lowe'
echo post_type:'bc_teams'
echo '*****'


WP_POST_ID=$(/usr/local/bin/php /usr/local/bin/wp post create --post_type=bc_teams --post_title='Kevin Patrick Peters, CLU&reg;' --post_name='kevin-peters' --porcelain)
if [ $? -eq 0 ];then
/usr/local/bin/php /usr/local/bin/wp post update $WP_POST_ID --post_status='publish' --meta_input='{"rank_math_description":"n/a", "rank_math_permalink":"kevin-peters","rank_math_title":"Kevin Patrick Peters, CLU&reg; | XML Financial"}'
  if [ $? -ne 0 ];then
    echo Post Update Failed
  fi
else
  echo Post Create Failed
fi
echo post_id: $WP_POST_ID
echo post_title:'Kevin Patrick Peters, CLU&reg;'
echo post_type:'bc_teams'
echo '*****'


WP_POST_ID=$(/usr/local/bin/php /usr/local/bin/wp post create --post_type=bc_teams --post_title='Lauren O’Brien, CFP&reg;, CPA' --post_name='lauren-o\u0027brien' --porcelain)
if [ $? -eq 0 ];then
/usr/local/bin/php /usr/local/bin/wp post update $WP_POST_ID --post_status='publish' --meta_input='{"rank_math_description":"n/a", "rank_math_permalink":"lauren-o\u0027brien","rank_math_title":"Lauren O’Brien, CFP&reg;, CPA | XML Financial"}'
  if [ $? -ne 0 ];then
    echo Post Update Failed
  fi
else
  echo Post Create Failed
fi
echo post_id: $WP_POST_ID
echo post_title:'Lauren O’Brien, CFP&reg;, CPA'
echo post_type:'bc_teams'
echo '*****'


WP_POST_ID=$(/usr/local/bin/php /usr/local/bin/wp post create --post_type=bc_teams --post_title='Michelle P. Cooper JD, MBA' --post_name='michelle-cooper' --porcelain)
if [ $? -eq 0 ];then
/usr/local/bin/php /usr/local/bin/wp post update $WP_POST_ID --post_status='publish' --meta_input='{"rank_math_description":"n/a", "rank_math_permalink":"michelle-cooper","rank_math_title":"Michelle P. Cooper JD, MBA"}'
  if [ $? -ne 0 ];then
    echo Post Update Failed
  fi
else
  echo Post Create Failed
fi
echo post_id: $WP_POST_ID
echo post_title:'Michelle P. Cooper JD, MBA'
echo post_type:'bc_teams'
echo '*****'


WP_POST_ID=$(/usr/local/bin/php /usr/local/bin/wp post create --post_type=bc_teams --post_title='Michelle Mitchell' --post_name='michelle-mitchell' --porcelain)
if [ $? -eq 0 ];then
/usr/local/bin/php /usr/local/bin/wp post update $WP_POST_ID --post_status='publish' --meta_input='{"rank_math_description":"n/a", "rank_math_permalink":"michelle-mitchell","rank_math_title":"Michelle Mitchell | XML Financial"}'
  if [ $? -ne 0 ];then
    echo Post Update Failed
  fi
else
  echo Post Create Failed
fi
echo post_id: $WP_POST_ID
echo post_title:'Michelle Mitchell'
echo post_type:'bc_teams'
echo '*****'


WP_POST_ID=$(/usr/local/bin/php /usr/local/bin/wp post create --post_type=bc_teams --post_title='Nicole Treiber' --post_name='nicole-treiber' --porcelain)
if [ $? -eq 0 ];then
/usr/local/bin/php /usr/local/bin/wp post update $WP_POST_ID --post_status='publish' --meta_input='{"rank_math_description":"n/a", "rank_math_permalink":"nicole-treiber","rank_math_title":"Nicole Treiber | XML Financial"}'
  if [ $? -ne 0 ];then
    echo Post Update Failed
  fi
else
  echo Post Create Failed
fi
echo post_id: $WP_POST_ID
echo post_title:'Nicole Treiber'
echo post_type:'bc_teams'
echo '*****'


WP_POST_ID=$(/usr/local/bin/php /usr/local/bin/wp post create --post_type=bc_teams --post_title='Noorjahan Enayat, CFP&reg;' --post_name='noorjahan-enayat' --porcelain)
if [ $? -eq 0 ];then
/usr/local/bin/php /usr/local/bin/wp post update $WP_POST_ID --post_status='publish' --meta_input='{"rank_math_description":"n/a", "rank_math_permalink":"noorjahan-enayat","rank_math_title":"Noorjahan Enayat, CFP&reg; | XML Financial"}'
  if [ $? -ne 0 ];then
    echo Post Update Failed
  fi
else
  echo Post Create Failed
fi
echo post_id: $WP_POST_ID
echo post_title:'Noorjahan Enayat, CFP&reg;'
echo post_type:'bc_teams'
echo '*****'


WP_POST_ID=$(/usr/local/bin/php /usr/local/bin/wp post create --post_type=bc_teams --post_title='Rob D. Kantor' --post_name='rob-d.-kantor' --porcelain)
if [ $? -eq 0 ];then
/usr/local/bin/php /usr/local/bin/wp post update $WP_POST_ID --post_status='publish' --meta_input='{"rank_math_description":"n/a", "rank_math_permalink":"rob-d.-kantor","rank_math_title":"Rob D. Kantor | XML Financial"}'
  if [ $? -ne 0 ];then
    echo Post Update Failed
  fi
else
  echo Post Create Failed
fi
echo post_id: $WP_POST_ID
echo post_title:'Rob D. Kantor'
echo post_type:'bc_teams'
echo '*****'


WP_POST_ID=$(/usr/local/bin/php /usr/local/bin/wp post create --post_type=bc_teams --post_title='Robert Walterman' --post_name='robert-walterman' --porcelain)
if [ $? -eq 0 ];then
/usr/local/bin/php /usr/local/bin/wp post update $WP_POST_ID --post_status='publish' --meta_input='{"rank_math_description":"n/a", "rank_math_permalink":"robert-walterman","rank_math_title":"Robert Walterman | XML Financial"}'
  if [ $? -ne 0 ];then
    echo Post Update Failed
  fi
else
  echo Post Create Failed
fi
echo post_id: $WP_POST_ID
echo post_title:'Robert Walterman'
echo post_type:'bc_teams'
echo '*****'


WP_POST_ID=$(/usr/local/bin/php /usr/local/bin/wp post create --post_type=bc_teams --post_title='E. Ronald Lara, CFP&reg;' --post_name='ron-lara' --porcelain)
if [ $? -eq 0 ];then
/usr/local/bin/php /usr/local/bin/wp post update $WP_POST_ID --post_status='publish' --meta_input='{"rank_math_description":"n/a", "rank_math_permalink":"ron-lara","rank_math_title":"E. Ronald Lara, CFP&reg; | XML Financial"}'
  if [ $? -ne 0 ];then
    echo Post Update Failed
  fi
else
  echo Post Create Failed
fi
echo post_id: $WP_POST_ID
echo post_title:'E. Ronald Lara, CFP&reg;'
echo post_type:'bc_teams'
echo '*****'


WP_POST_ID=$(/usr/local/bin/php /usr/local/bin/wp post create --post_type=bc_teams --post_title='Sasha Chelekhov, CFP&reg;, CES™, MBA' --post_name='sasha-chelekhov' --porcelain)
if [ $? -eq 0 ];then
/usr/local/bin/php /usr/local/bin/wp post update $WP_POST_ID --post_status='publish' --meta_input='{"rank_math_description":"n/a", "rank_math_permalink":"sasha-chelekhov","rank_math_title":"Sasha Chelekhov, CFP&reg;, CES™, MBA | XML Financial"}'
  if [ $? -ne 0 ];then
    echo Post Update Failed
  fi
else
  echo Post Create Failed
fi
echo post_id: $WP_POST_ID
echo post_title:'Sasha Chelekhov, CFP&reg;, CES™, MBA'
echo post_type:'bc_teams'
echo '*****'


WP_POST_ID=$(/usr/local/bin/php /usr/local/bin/wp post create --post_type=bc_teams --post_title='Sharon Abbey' --post_name='sharon-abbey' --porcelain)
if [ $? -eq 0 ];then
/usr/local/bin/php /usr/local/bin/wp post update $WP_POST_ID --post_status='publish' --meta_input='{"rank_math_description":"n/a", "rank_math_permalink":"sharon-abbey","rank_math_title":"Sharon Abbey | XML Financial"}'
  if [ $? -ne 0 ];then
    echo Post Update Failed
  fi
else
  echo Post Create Failed
fi
echo post_id: $WP_POST_ID
echo post_title:'Sharon Abbey'
echo post_type:'bc_teams'
echo '*****'


WP_POST_ID=$(/usr/local/bin/php /usr/local/bin/wp post create --post_type=bc_teams --post_title='Stacey Lee' --post_name='stacey-lee' --porcelain)
if [ $? -eq 0 ];then
/usr/local/bin/php /usr/local/bin/wp post update $WP_POST_ID --post_status='publish' --meta_input='{"rank_math_description":"n/a", "rank_math_permalink":"stacey-lee","rank_math_title":"Stacey Lee | XML Financial"}'
  if [ $? -ne 0 ];then
    echo Post Update Failed
  fi
else
  echo Post Create Failed
fi
echo post_id: $WP_POST_ID
echo post_title:'Stacey Lee'
echo post_type:'bc_teams'
echo '*****'


WP_POST_ID=$(/usr/local/bin/php /usr/local/bin/wp post create --post_type=bc_teams --post_title='Steven Collins' --post_name='steve-collins' --porcelain)
if [ $? -eq 0 ];then
/usr/local/bin/php /usr/local/bin/wp post update $WP_POST_ID --post_status='publish' --meta_input='{"rank_math_description":"n/a", "rank_math_permalink":"steve-collins","rank_math_title":"Steven Collins | XML Financial"}'
  if [ $? -ne 0 ];then
    echo Post Update Failed
  fi
else
  echo Post Create Failed
fi
echo post_id: $WP_POST_ID
echo post_title:'Steven Collins'
echo post_type:'bc_teams'
echo '*****'


WP_POST_ID=$(/usr/local/bin/php /usr/local/bin/wp post create --post_type=bc_teams --post_title='Susan A. Harpe' --post_name='susan-a.-harpe' --porcelain)
if [ $? -eq 0 ];then
/usr/local/bin/php /usr/local/bin/wp post update $WP_POST_ID --post_status='publish' --meta_input='{"rank_math_description":"n/a", "rank_math_permalink":"susan-a.-harpe","rank_math_title":"Susan A. Harpe | XML Financial"}'
  if [ $? -ne 0 ];then
    echo Post Update Failed
  fi
else
  echo Post Create Failed
fi
echo post_id: $WP_POST_ID
echo post_title:'Susan A. Harpe'
echo post_type:'bc_teams'
echo '*****'


WP_POST_ID=$(/usr/local/bin/php /usr/local/bin/wp post create --post_type=bc_teams --post_title='Theresa Kosma' --post_name='theresa-kosma' --porcelain)
if [ $? -eq 0 ];then
/usr/local/bin/php /usr/local/bin/wp post update $WP_POST_ID --post_status='publish' --meta_input='{"rank_math_description":"n/a", "rank_math_permalink":"theresa-kosma","rank_math_title":"Theresa Kosma | XML Financial"}'
  if [ $? -ne 0 ];then
    echo Post Update Failed
  fi
else
  echo Post Create Failed
fi
echo post_id: $WP_POST_ID
echo post_title:'Theresa Kosma'
echo post_type:'bc_teams'
echo '*****'


WP_POST_ID=$(/usr/local/bin/php /usr/local/bin/wp post create --post_type=bc_teams --post_title='Todd Kullen' --post_name='todd-kullen' --porcelain)
if [ $? -eq 0 ];then
/usr/local/bin/php /usr/local/bin/wp post update $WP_POST_ID --post_status='publish' --meta_input='{"rank_math_description":"n/a", "rank_math_permalink":"todd-kullen","rank_math_title":"Todd Kullen | XML Financial"}'
  if [ $? -ne 0 ];then
    echo Post Update Failed
  fi
else
  echo Post Create Failed
fi
echo post_id: $WP_POST_ID
echo post_title:'Todd Kullen'
echo post_type:'bc_teams'
echo '*****'


WP_POST_ID=$(/usr/local/bin/php /usr/local/bin/wp post create --post_type=page --post_title='Let\u0027s Talk' --post_name='https://www.xmlfg.com/contact/' --page_template='page-templates/bc-contactpage.php' --porcelain)
if [ $? -eq 0 ];then
/usr/local/bin/php /usr/local/bin/wp post update $WP_POST_ID --post_status='publish' --meta_input='{"rank_math_description":"n/a", "rank_math_permalink":"https://www.xmlfg.com/contact/","rank_math_title":"Contact Us | XML Financial"}'
  if [ $? -ne 0 ];then
    echo Post Update Failed
  fi
else
  echo Post Create Failed
fi
echo post_id: $WP_POST_ID
echo post_title:'Let\u0027s Talk'
echo post_type:'page'
echo '*****'


WP_POST_ID=$(/usr/local/bin/php /usr/local/bin/wp post create --post_type=page --post_title='Starting out - Solid Foundation' --post_name='/communities' --page_template='page-tempaltes/bc-communitiespage.php' --porcelain)
if [ $? -eq 0 ];then
/usr/local/bin/php /usr/local/bin/wp post update $WP_POST_ID --post_status='publish' --meta_input='{"rank_math_description":"n/a", "rank_math_permalink":"/communities","rank_math_title":"n/a"}'
  if [ $? -ne 0 ];then
    echo Post Update Failed
  fi
else
  echo Post Create Failed
fi
echo post_id: $WP_POST_ID
echo post_title:'Starting out - Solid Foundation'
echo post_type:'page'
echo '*****'


WP_POST_ID=$(/usr/local/bin/php /usr/local/bin/wp post create --post_type=page --post_title='Home' --post_name='https://www.xmlfg.com' --page_template='page-templates/bc-homepage.php' --porcelain)
if [ $? -eq 0 ];then
/usr/local/bin/php /usr/local/bin/wp post update $WP_POST_ID --post_status='publish' --meta_input='{"rank_math_description":"The investment and wealth management consultants at the XML Financial Group help individuals, businesses, and nonprofits in Maryland with every aspect of their monetary lives. Call today!", "rank_math_permalink":"https://www.xmlfg.com","rank_math_title":"Financial Planning & Wealth Management Maryland (MD) | XML Financial Group"}'
  if [ $? -ne 0 ];then
    echo Post Update Failed
  fi
else
  echo Post Create Failed
fi
echo post_id: $WP_POST_ID
echo post_title:'Home'
echo post_type:'page'
echo '*****'
