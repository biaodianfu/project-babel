<?php
interface Language {
	public function lang();
	public function login();
	public function signed_in($site);
	public function logout();
	public function now_auto_redirecting($site);
	public function sign_in_again();
	public function you_have_signed_out($site);
	public function privacy_ok();
	public function welcome_back_anytime();
	public function return_home($site);
	public function shuffle_home();
	public function remix_home();
	public function home($site);
	public function help();
	public function new_features();
	public function user_id();
	public function user_fullname();
	public function user_introduction();
	public function email();
	public function password();
	public function password_again();
	public function new_password();
	public function new_password_again();
	public function change_password_tips();
	public function gender();
	public function gender_categories(); // return: array
	public function religion();
	public function religion_categories(); // return: array
	public function expose_my_religion();
	public function confirmation_code();
	public function confirmation_code_tips();
	public function email_or_nick();
	public function register_agreement();
	public function take_a_tour();
	public function about($site);
	public function rss();
	public function copper($i);
	public function register();
	public function search();
	public function ref_search();
	public function tools();
	public function go_on();
	public function members_total();
	public function discussions();
	public function favorites();
	public function savepoints();
	public function ing_updates();
	public function weblogs();
	public function online_total();
	public function online_now();
	public function online_details($onl_created, $onl_lastmoved);
	public function disconnected();
	public function anonymous();
	public function registered();
	public function system_status();
	public function online_count($i);
	public function session_count($i);
	public function login_history();
	public function upload_portrait();
	public function upload_portrait_tips();
	public function current_portrait();
	public function choose_a_picture();
	public function settings();
	public function set_location();
	public function password_recovery();
	public function password_recovery_tips();
	public function timtowtdi();
	public function reply();
	public function login_and_reply();
	public function switch_description();
	public function jump_to_replies();
	public function hits($i);
	public function posts($i);
	public function me();
	public function topic_creator();
	public function expenses();
	public function my_profile($site);
	public function my_topics();
	public function my_blogs();
	public function my_messages();
	public function my_friends();
	public function my_favorites();
	public function send_money();
	public function top_wealth();
	public function top_topics();
	public function hottest_topics();
	public function hottest_discussion_boards();
	public function random_discussion_boards();
	public function latest_topics();
	public function latest_replied();
	public function latest_unanswered();
	public function latest_members();
	public function latest_favorites();
	public function join_discussion();
	public function browse_node($name, $title);
	public function more_favorites();
	public function more_updates();
	public function more_hot_topics();
	public function hot_topics();
	public function current_hottest_topic();
	public function member_show();
	public function member_list();
	public function member_count($count);
	public function create_new_topic();
	public function create_new_topic_in($title);
	public function favorite_this_topic();
	public function be_the_first_one_to_reply();
	public function wanna_say_something();
	public function you_can_only_answer_your_own();
	public function this_is_an_autistic_node();
	public function you_cannot_reply_autistic();
	public function who_adds_me();
	public function login_before_reply();
	public function please_check();
	public function new_topic();
	public function go_to_top();
	public function switch_language();
	public function no_reply_yet();
	public function member_num($num);
	public function one_s_savepoints($user);
	public function one_s_friends($user);
	public function one_s_recent_topics($user);
	public function one_s_recent_discussions($user);
	public function one_s_most_favorite_artists($user);
	public function one_s_recent_listened_tracks($user);
	public function title();
	public function category();
	public function description();
	public function content();
	public function publish();
	public function upload();
	public function modify();
	public function return_to_discussion_board();
	public function return_to_section();
	public function board_stats_topics($count);
	public function board_stats_favs($count, $name);
	public function board_stats_favs_zero();
	public function related_sites();
	public function related_favs();
	public function no_related_channel();
	public function update();
	public function last_signed_in();
	public function logins($count);
	public function location();
	public function current_location();
	public function people_in_the_same_area();
	public function set_location_tips();
	public function blog_compose();
	public function blog_create();
	public function blog_manage_articles();
	public function blog_rebuild();
	public function blog_destroy();
	public function blog_icon();
	public function blog_theme();
	public function blog_settings();
	public function blog_view();
}
?>
