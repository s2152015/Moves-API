<?php  
// ./app/views/helpers/disqus.php 
    /** 
     * Disqus comment system integration Helper 
     * 
     * @author ToX - http://emanuele.itoscano.com - toss82 - at - gmail.com 
     * 
     * 
     * 
     * @help: 
     *        In function makeRepliable, I set the projectName somewhere in my configuration files,  
     *        remember to change this variable to something that suits your needs.  
     *          
     */ 

class DisqusHelper extends Helper { 
    var $helpers = array('Html', 'Javascript'); 

    function repliesLinkCounter() { 
        $projectName = Configure::read('Disqus.transhome'); 
        $createJS = " 
            (function() { 
                var links = document.getElementsByTagName('a'); 
                var query = '?'; 
                for(var i = 0; i < links.length; i++) { 
                if(links[i].href.indexOf('#disqus_thread') >= 0) { 
                    query += 'url' + i + '=' + encodeURIComponent(links[i].href) + '&amp;'; 
                } 
                } 
                document.write('<script charset=\"utf-8\" type=\"text/javascript\" src=\"http://disqus.com/forums/{$projectName}/get_num_replies.js' + query + '\"></' + 'script>'); 
            })(); 
        "; 
        $return = $this->Javascript->codeBlock($createJS); 
        return $return; 
    } 

    function makeRepliable() { 
        $projectName = Configure::read('Disqus.transhome'); 
        $return = '<div id="disqus_thread"></div>'; 
        $return .= $this->Javascript->link("http://disqus.com/forums/{$projectName}/embed.js"); 
        return $return; 
    } 

    function recentComments($num_items = 5, $hide_avatars = 0, $avatar_size = 32, $excerpt_lenght = 200) { 
        $projectName = Configure::read('Disqus.transhome'); 
        $return =  "<div id='recentcomments' class='dsq-widget'>"; 
            $return .=  "<h2 class='dsq-widget-title'>". __('Recent Comments', true) ."</h2>"; 
            $return .= $this->Javascript->link("http://disqus.com/forums/{$projectName}/recent_comments_widget.js?num_items={$num_items}&hide_avatars={$hide_avatars}&avatar_size={$avatar_size}&excerpt_length={$excerpt_lenght}");
        $return .=  "</div>"; 
        //$return .=  "<a href='http://disqus.com/'>Powered by Disqus</a>"; 
        return $return; 
    } 
} 
?>