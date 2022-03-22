<?php
class Session {
    /*
	 * Constructor class
	 *
	 * @access public
	 * @return 	object	object session
	 */
    public function __construct() {

    }

    public function start($flag = 0) {
        session_start();
        if ($flag) {
            session_write_close();
        }
    }

    public function stop() {
        session_unset();
        session_destroy();
    }

    public function restart() {
        self::stop();
        self::start();
        #session_regenerate_id(true);
    }

}
