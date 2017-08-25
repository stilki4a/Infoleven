<?php

/**
 * Created by PhpStorm.
 * User: user
 * Date: 8/24/2017
 * Time: 1:37 AM
 */
class UserDAO implements IUser {

        const GET_AND_CHECK_USER_SQL = "SELECT user_name, user_id FROM users WHERE user_name = ? AND user_pass = sha1(?)";



        public function login(User $user) {
            $db = DBConnection::getDb();

            $pstmt = $db->prepare(self::GET_AND_CHECK_USER_SQL);
            $pstmt->execute(array($user->username, $user->password));

            $res = $pstmt->fetchAll(PDO::FETCH_ASSOC);

            if (count($res) === 0)
                throw new Exception("Грешно име или парола!");

            $user = $res[0];



            return new User($user['user_name'], 'sts', $user['user_id']);
        }

    }
?>