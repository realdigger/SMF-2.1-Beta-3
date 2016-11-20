<?php
// Version: 2.1 Beta 3; Errors

global $scripturl, $modSettings;

$txt['no_access'] = 'Вы не можете зайти в этот раздел';
$txt['not_found'] = 'Этот раздел недоступен в данный момент.';

$txt['mods_only'] = 'Только модераторы могут использовать прямую функцию удаления, пожалуйста, удалите это сообщение через команду <strong>Изменить</strong>.';
$txt['no_name'] = 'Поле <strong>Имя</strong> обязательно для заполнения.';
$txt['no_email'] = 'Поле <strong>Email</strong> обязательно для заполнения.';
$txt['topic_locked'] = 'Эта тема заблокирована, посылать или изменять сообщения нельзя...';
$txt['no_password'] = 'Введите пароль';
$txt['already_a_user'] = 'Указанное имя пользователя уже используется на форуме.';
$txt['cant_move'] = 'Вы не можете перемещать темы...';
$txt['login_to_post'] = 'Для отправки сообщений нужно авторизоваться. Если вы еще не зарегистрированы, можно сделать это <a href="' . $scripturl . '?action=signup">прямо сейчас </a>.';
$txt['passwords_dont_match'] = 'Пароли не совпадают.';
$txt['register_to_use'] = 'Перед тем, как использовать эти настройки, необходимо зарегистрироваться.';
$txt['password_invalid_character'] = 'Использован недопустимый символ в пароле.';
$txt['name_invalid_character'] = 'Использован недопустимый символ в имени.';
$txt['email_invalid_character'] = 'Использован недопустимый символ в e-mail.';
$txt['username_reserved'] = 'Указанное имя пользователя зарезервировано \'%1$s\'. Пожалуйста, выберите другое имя.';
$txt['numbers_one_to_nine'] = 'В этом поле можно указывать только числа от 0 до 9';
$txt['not_a_user'] = 'Пользователя не существует.';
$txt['not_a_topic'] = 'Темы не существует.';
$txt['email_in_use'] = 'Данный e-mail (%1$s) уже используется другим пользователем. Если думаете, что это ошибка, воспользуйтесь опцией напоминания пароля на странице входа.';
$txt['attachments_no_write'] = 'Папка для вложений находится в режиме ТОЛЬКО ДЛЯ ЧТЕНИЯ. Вложения и аватары НЕ могут быть сохранены.';
$txt['attachment_not_created'] = 'The attachment could not be created';

$txt['didnt_select_vote'] = 'Вы не выбрали пункт голосования.';
$txt['poll_error'] = 'Голосование не существует или закрыто, либо вы пытаетесь проголосовать дважды.';
$txt['members_only'] = 'Этот сервис доступен только для пользователей форума...';
$txt['locked_by_admin'] = 'Заблокировано администратором. Вы не можете разблокировать.';
$txt['feature_disabled'] = 'Извините, эта опция отключена.';
$txt['feature_no_exists'] = 'Sorry, this feature doesn\'t exist.';
$txt['couldnt_connect'] = 'Не получилось соединиться с сервером или файл не найден';
$txt['no_board'] = 'Указанный раздел не существует';
$txt['no_message'] = 'Это сообщение больше недоступно.';
$txt['cant_split'] = 'Вы не можете разделять темы';
$txt['cant_merge'] = 'Вы не можете соединять темы';
$txt['no_topic_id'] = 'Вы указали неправильный ID темы.';
$txt['split_first_post'] = 'Вы не можете разделять тему с первого сообщения.';
$txt['topic_one_post'] = 'Эта тема содержит только одно сообщение и не может быть разделена.';
$txt['no_posts_selected'] = 'не выбраны сообщения';
$txt['selected_all_posts'] = 'Невозможно разделить тему. Вы выбрали все сообщения.';
$txt['cant_find_messages'] = 'Невозможно найти сообщения';
$txt['cant_find_user_email'] = 'Невозможно найти пользователя с таким e-mail.';
$txt['cant_insert_topic'] = 'Невозможно вставить тему';
$txt['already_a_mod'] = 'Вы выбрали имя пользователя, совпадающее с именем существующего модератора. Пожалуйста, выберите другое имя.';
$txt['session_timeout'] = 'Ваша сессия закончилась, пока вы писали сообщение. Вернитесь назад и попробуйте снова.';
$txt['session_verify_fail'] = 'Не удалось проверить сессию. Попробуйте выйти с форума и зайти снова.';
$txt['verify_url_fail'] = 'Невозможно проверить месторасположение отсылаемого файла. Вернитесь назад и попробуйте снова.';
$txt['token_verify_fail'] = 'Token verification failed. Please go back and try again.';
$txt['guest_vote_disabled'] = 'Гости не могут участвовать в этом голосовании.';

$txt['cannot_like_content'] = 'You are not able to like that content.';
$txt['cannot_view_likes'] = 'You are not able to view who liked that content.';
$txt['cannot_access_mod_center'] = 'Вы не обладаете правами доступа в центр модерации.';
$txt['cannot_admin_forum'] = 'Вы не можете администрировать этот форум.';
$txt['cannot_announce_topic'] = 'Вы не можете извещать о темах в этом разделе.';
$txt['cannot_approve_posts'] = 'У вас нет прав доступа для одобрения данного элемента.';
$txt['cannot_post_unapproved_attachments'] = 'Вы не обладаете правами доступа для публикации неодобренных вложений';
$txt['cannot_post_unapproved_topics'] = 'Вы не обладаете правами доступа для публикации сообщений в неодобренных темах.';
$txt['cannot_post_unapproved_replies_own'] = 'Вы не обладаете правами доступа для публикации неодобренных сообщений в своих темах.';
$txt['cannot_post_unapproved_replies_any'] = 'Вы не обладаете правами доступа для публикации неодобренных сообщений в чужих темах.';
$txt['cannot_calendar_edit_any'] = 'Вы не можете редактировать календарные события.';
$txt['cannot_calendar_edit_own'] = 'У вас нет необходимых привилегий, чтобы редактировать свои события.';
$txt['cannot_calendar_post'] = 'Размещение событий запрещено, извините.';
$txt['cannot_calendar_view'] = 'Извините, нельзя просматривать календарь.';
$txt['cannot_remove_any'] = 'У вас нет прав на удаление любых тем. Проверьте, что эта тема не была перенесена из другого раздела.';
$txt['cannot_remove_own'] = 'Вы не можете удалять свои темы в этом разделе. Проверьте, что эта тема не была перенесена из другого раздела.';
$txt['cannot_edit_news'] = 'Вы не можете редактировать новости на этом форуме.';
$txt['cannot_pm_read'] = 'Извините, нельзя читать личные сообщения.';
$txt['cannot_pm_send'] = 'Извините, нельзя отправлять личные сообщения.';
$txt['cannot_lock_any'] = 'Вы не можете закрывать темы.';
$txt['cannot_lock_own'] = 'Извините, нельзя закрывать собственные темы.';
$txt['cannot_make_sticky'] = 'Вы не можете прикрепить эту тему.';
$txt['cannot_manage_attachments'] = 'Вам не разрешается управлять вложениями или аватарами.';
$txt['cannot_manage_bans'] = 'Вы не можете изменять список забаненных пользователей.';
$txt['cannot_manage_boards'] = 'Вам не позволено управлять разделами и категориями.';
$txt['cannot_manage_membergroups'] = 'Не хватает прав для изменения или добавления групп пользователей.';
$txt['cannot_manage_permissions'] = 'Не хватает прав для управления правами пользователей.';
$txt['cannot_manage_smileys'] = 'Вы не можете управлять смайлами и иконками сообщений.';
$txt['cannot_merge_any'] = 'Вы не можете соединять темы в этом разделе.';
$txt['cannot_merge_redirect'] = 'One or more of the topics you have selected is a redirect topic and cannot be merged.';
$txt['cannot_moderate_forum'] = 'Вы не можете модерировать этот форум.';
$txt['cannot_moderate_board'] = 'Вам не разрешена модерация этого раздела.';
$txt['cannot_modify_any'] = 'Вы не можете изменять любые сообщения.';
$txt['cannot_modify_own'] = 'Извините, нельзя редактировать собственные сообщения.';
$txt['cannot_modify_replies'] = 'Вы не можете редактировать сообщения, даже если являетесь автором.';
$txt['cannot_move_own'] = 'Вы не можете перемещать собственные темы.';
$txt['cannot_move_any'] = 'Вы не можете перемещать темы в этом разделе.';
$txt['cannot_poll_add_own'] = 'Извините, нельзя добавлять голосование в собственную тему.';
$txt['cannot_poll_add_any'] = 'Извините, нельзя добавлять голосования в темы.';
$txt['cannot_poll_edit_own'] = 'Вы не можете редактировать голосование, даже если являетесь автором.';
$txt['cannot_poll_edit_any'] = 'Вы не можете редактировать голосования.';
$txt['cannot_poll_lock_own'] = 'Вы не можете закрывать свои голосования.';
$txt['cannot_poll_lock_any'] = 'Извините, нельзя закрывать голосования.';
$txt['cannot_poll_post'] = 'Вы не можете создавать голосования в этом разделе.';
$txt['cannot_poll_remove_own'] = 'Вы не можете удалить голосование из собственной темы.';
$txt['cannot_poll_remove_any'] = 'Вы не можете удалять голосования.';
$txt['cannot_poll_view'] = 'Вы не можете просматривать голосования в этом разделе.';
$txt['cannot_poll_vote'] = 'Извините, но нельзя голосовать в этом разделе.';
$txt['cannot_post_attachment'] = 'Вы не можете вставлять здесь вложения.';
$txt['cannot_post_new'] = 'Извините, но вам нельзя создавать новые темы в этом разделе.';
$txt['cannot_post_reply_any'] = 'Вы не можете отвечать в этом разделе.';
$txt['cannot_post_reply_own'] = 'Вы не можете отвечать в этом разделе, даже если являетесь автором темы.';
$txt['cannot_post_redirect'] = 'You cannot post in redirection boards.';
$txt['cannot_profile_remove_own'] = 'Извините, нельзя удалить свою учётную запись.';
$txt['cannot_profile_remove_any'] = 'У вас нет прав на удаление учётных записей пользователей.';
$txt['cannot_profile_extra_any'] = 'Вы не можете изменять настройки профиля.';
$txt['cannot_profile_identity_any'] = 'Вы не можете редактировать настройки учётной записи.';
$txt['cannot_profile_title_any'] = 'Вы не можете редактировать надпись над аватаром пользователей.';
$txt['cannot_profile_extra_own'] = 'Извините, редактировать данные в профиле запрещено.';
$txt['cannot_profile_identity_own'] = 'Извините, изменение информации запрещено.';
$txt['cannot_profile_title_own'] = 'Вы не можете изменить надпись над аватаром.';
$txt['cannot_profile_server_avatar'] = 'Вы не можете использовать аватары, расположенные на сервере.';
$txt['cannot_profile_upload_avatar'] = 'Вы не можете загружать аватары.';
$txt['cannot_profile_remote_avatar'] = 'Вы не можете использовать аватары с удаленного сервера.';
$txt['cannot_profile_view'] = 'Many apologies, but you can\'t view just any profile.';
$txt['cannot_delete_own'] = 'Вы не можете удалять собственные темы в этом разделе.';
$txt['cannot_delete_replies'] = 'Извините, нельзя удалять сообщения, даже если они находятся в вашей собственной теме.';
$txt['cannot_delete_any'] = 'Извините, нельзя удалять темы.';
$txt['cannot_report_any'] = 'Вы не можете извещать о сообщениях в этом разделе.';
$txt['cannot_search_posts'] = 'Вы не можете искать сообщения на этом форуме.';
$txt['cannot_send_mail'] = 'У вас не хватает прав на отправку e-mail пользователям форума.';
$txt['cannot_issue_warning'] = 'Извините, но у вас нет прав доступа, чтобы делать предупреждения.';
$txt['cannot_send_email_to_members'] = 'Sorry, but the administrator has disallowed sending emails on this board.';
$txt['cannot_split_any'] = 'Разделение любых тем в этом разделе запрещено.';
$txt['cannot_view_attachments'] = 'Вам не позволено скачивать или просматривать вложения в этом разделе.';
$txt['cannot_view_mlist'] = 'Вы не можете просматривать список пользователей.';
$txt['cannot_view_stats'] = 'Вы не можете просматривать статистику форума.';
$txt['cannot_who_view'] = 'Вы не можете просматривать, кто онлайн.';

$txt['no_theme'] = 'Такой темы не существует.';
$txt['theme_dir_wrong'] = 'Директория темы указана неверно, пожалуйста, исправьте ее нажав на этот текст.';
$txt['registration_disabled'] = 'Извините, регистрация в данный момент недоступна.';
$txt['registration_agreement_missing'] = 'The registration agreement file, agreement.txt, is either missing or empty. Registrations have been disable until this is fixed';
$txt['registration_no_secret_question'] = 'Извините, для данного пользователя не выбран секретный вопрос.';
$txt['poll_range_error'] = 'Извините, опрос должен длиться минимум 1 день.';
$txt['delFirstPost'] = 'Вы не можете удалить первое сообщение в теме.<p>Если хотите удалить всю тему, нажмите на УДАЛИТЬ ТЕМУ или попросите администратора/модератора сделать это за вас.</p>';
$txt['parent_error'] = 'Не удалось создать раздел!';
$txt['login_cookie_error'] = 'Не удалось войти на форум. Проверьте настройки cookie в браузере.';
$txt['login_ssl_required'] = 'You can only login via HTTPS';
$txt['register_ssl_required'] = 'You can only register via HTTPS';
$txt['incorrect_answer'] = 'Вы неправильно ответили на секретный вопрос. Нажмите "Назад" и попробуйте снова или нажмите "Назад" дважды, чтобы использовать обычный метод получения пароля.';
$txt['no_mods'] = 'Модераторы отсутствуют!';
$txt['parent_not_found'] = 'Структура раздела испорчена: не получилось найти родительский раздел';
$txt['modify_post_time_passed'] = 'Нельзя отредактировать это сообщение, поскольку время, отведенное на редактирование, истекло.';

$txt['calendar_off'] = 'Календарь в данный момент отключен.';
$txt['calendar_export_off'] = 'Вы не можете экспортировать события календаря, потому что эта возможность сейчас отключена.';
$txt['invalid_month'] = 'Неправильное значение месяца.';
$txt['invalid_year'] = 'Неправильное значение года.';
$txt['invalid_day'] = 'Неправильное значение дня.';
$txt['event_month_missing'] = 'Пропущен месяц события.';
$txt['event_year_missing'] = 'Пропущен год события.';
$txt['event_day_missing'] = 'Пропущен день события.';
$txt['event_title_missing'] = 'Пропущен заголовок события.';
$txt['invalid_date'] = 'Неправильная дата.';
$txt['no_event_title'] = 'Не введен заголовок события.';
$txt['missing_event_id'] = 'Не указан ID события.';
$txt['cant_edit_event'] = 'Не хватает прав на редактирование этого события.';
$txt['missing_board_id'] = 'Не указан ID раздела.';
$txt['missing_topic_id'] = 'Не указан ID темы.';
$txt['topic_doesnt_exist'] = 'Такой темы не существует.';
$txt['not_your_topic'] = 'Вы не являетесь владельцем этой темы.';
$txt['board_doesnt_exist'] = 'Такого раздела не существует.';
$txt['no_span'] = 'Возможность временного диапазона отключена.';
$txt['invalid_days_numb'] = 'Неверное количество дней временного диапазона.';

$txt['moveto_noboards'] = 'Отсутствует раздел для перемещения туда темы!';
$txt['topic_already_moved'] = 'This topic %1$s has been moved to the board %2$s, please check its new location before moving it again.';

$txt['already_activated'] = 'Ваша учётная запись уже активирована.';
$txt['still_awaiting_approval'] = 'Ваша учётная запись ожидает одобрения администратора.';

$txt['invalid_email'] = 'Неправильный e-mail или диапазон адресов.<br>Пример правильного электронного адреса: evil.user@badsite.com.<br>Пример правильного диапазона адресов: *@*.badsite.com';
$txt['invalid_expiration_date'] = 'Недоступная дата окончания';
$txt['invalid_hostname'] = 'Неправильное имя хоста или диапазона имен.<br>Пример правильного имени хоста: proxy4.badhost.com<br>Пример правильного диапазона имен: *.badhost.com';
$txt['invalid_ip'] = 'Неправильный IP или диапазон IP.<br>Пример правильного IP адреса: 127.0.0.1<br>Пример правильного диапазона IP адресов: 127.0.0-20.*';
$txt['invalid_tracking_ip'] = 'Неправильный IP или диапазон IP.<br>Пример правильного IP адреса: 127.0.0.1<br>Пример правильного диапазона IP адресов: 127.0.0.*';
$txt['invalid_username'] = 'Имя пользователя не найдено';
$txt['no_user_selected'] = 'Member not found';
$txt['no_ban_admin'] = 'Вы не можете забанить администратора форума. Для начала необходимо снять статус администратора!';
$txt['no_bantype_selected'] = 'Не выбран тип бана';
$txt['ban_not_found'] = 'Бан не найден';
$txt['ban_unknown_restriction_type'] = 'Тип запрета не известен';
$txt['ban_name_empty'] = 'Пустое имя бана';
$txt['ban_id_empty'] = 'Ban id not found';
$txt['ban_no_triggers'] = 'No ban triggers specified';
$txt['ban_ban_item_empty'] = 'Ban trigger not found';
$txt['impossible_insert_new_bangroup'] = 'An error occurred while inserting the new ban';

$txt['ban_name_exists'] = 'Бан с таким именем уже существует. Выберите другое имя.';
$txt['ban_trigger_already_exists'] = 'Данный запрет (%1$s) уже существует в %2$s.';

$txt['recycle_no_valid_board'] = 'Не выбран действующий раздел для удаления темы';
$txt['post_already_deleted'] = 'The topic or message has already been moved to the recycle board. Are you sure you want to delete it completely?<br>If so follow <a href="%1$s">this link</a>';

$txt['login_threshold_fail'] = 'Вы исчерпали лимит попыток входа на форум. Возвращайтесь позже и попробуйте снова.';
$txt['login_threshold_brute_fail'] = 'Вы превысили лимит попыток входа на форум. Подождите 30 секунд и повторите попытку.';

$txt['who_off'] = 'Вы не можете получить доступ к списку пользователей, находящихся онлайн. Данная функция отключена.';

$txt['merge_create_topic_failed'] = 'Ошибка при создании новой темы.';
$txt['merge_need_more_topics'] = 'Для соединения требуется как минимум две темы.';

$txt['post_WaitTime_broken'] = 'The last posting from your IP was less than %1$d seconds ago. Please try again later.';
$txt['register_WaitTime_broken'] = 'You already registered just %1$d seconds ago!';
$txt['login_WaitTime_broken'] = 'You will have to wait about %1$d seconds to login again, sorry.';
$txt['pm_WaitTime_broken'] = 'The last personal message from your IP was less than %1$d seconds ago. Please try again later.';
$txt['reporttm_WaitTime_broken'] = 'The last topic report from your IP was less than %1$d seconds ago. Please try again later.';
$txt['sendmail_WaitTime_broken'] = 'The last email sent from your IP was less than %1$d seconds ago. Please try again later.';
$txt['search_WaitTime_broken'] = 'Your last search was less than %1$d seconds ago. Please try again later.';
$txt['remind_WaitTime_broken'] = 'Your last reminder was less than %1$d seconds ago. Please try again later.';

$txt['email_missing_data'] = 'Вы должны ввести что-то в тему и тело сообщения.';

$txt['topic_gone'] = 'Тема или раздел, которую вы ищете, отсутствует или недоступна для входа.';
$txt['theme_edit_missing'] = 'Файл, который вы пытаетесь редактировать, не найден!';

$txt['no_dump_database'] = 'Только администратор может делать резервную копию базы данных!';
$txt['pm_not_yours'] = 'Личное сообщение, которое вы пытаетесь процитировать, не ваше или его не существует. Пожалуйста, вернитесь назад и попробуйте снова.';
$txt['mangled_post'] = 'Проблемы с датой, пожалуйста, вернитесь и попробуйте заново.';
$txt['too_many_groups'] = 'Sorry, you selected too many groups, please remove some.';
$txt['post_upload_error'] = 'The post data is missing. This error is can be caused by trying to submit a file larger than allowed by the server. Please contact your administrator if this problem continues.';
$txt['quoted_post_deleted'] = 'Сообщение, которое вы пытаетесь процитировать, было удалено или больше недоступно.';
$txt['pm_too_many_per_hour'] = 'Вы исчерпали лимит отправки личных сообщений в %1$d за один час.';

$txt['register_only_once'] = 'Извините, но нельзя регистрировать сразу несколько пользователей за один раз.';
$txt['admin_setting_coppa_require_contact'] = 'Вы должны ввести свои контактные данные или номер факса для контакта с вашими родителями/опекунами (если требуется их одобрение).';

$txt['error_long_name'] = 'Имя, которое вы пытаетесь использовать, слишком длинное.';
$txt['error_no_name'] = 'Отсутствует имя.';
$txt['error_bad_name'] = 'Данное имя не может быть использовано. Оно зарезервировано на форуме.';
$txt['error_no_email'] = 'Отсутствует e-mail.';
$txt['error_bad_email'] = 'Неправильный e-mail.';
$txt['error_no_event'] = 'Отсутствует название события.';
$txt['error_no_subject'] = 'Отсутствует тема сообщения.';
$txt['error_no_question'] = 'Отсутствует вопрос.';
$txt['error_no_message'] = 'Сообщение было оставлено пустым.';
$txt['error_long_message'] = 'Сообщение превышает максимально допустимую длину (%s знаков).';
$txt['error_no_comment'] = 'Текст комментария не введен.';
// duplicate of post_too_long in Post.{language}.php
$txt['error_post_too_long'] = 'Your message is too long. Please go back and shorten it, then try again.';
$txt['error_session_timeout'] = 'Ваша сессия истекла во время написания сообщения. Пожалуйста, попробуйте заново.';
$txt['error_no_to'] = 'Отсутствуют получатели.';
$txt['error_bad_to'] = 'Получатели не найдены.';
$txt['error_bad_bcc'] = 'Получатели не найдены.';
$txt['error_form_already_submitted'] = 'Вы уже отправили это сообщение! Возможно, вы случайно нажали дважды или попытались обновить страницу.';
$txt['error_poll_few'] = 'Должно быть как минимум два пункта голосования!';
$txt['error_poll_many'] = 'You must have no more than 256 choices.';
$txt['error_need_qr_verification'] = 'Пожалуйста, ответьте на проверочный вопрос внизу, чтобы получить возможность создать сообщение.';
$txt['error_wrong_verification_code'] = 'Набранные символы не совпадают с символами на изображении.';
$txt['error_wrong_verification_answer'] = 'Вы неправильно ответили на вопрос.';
$txt['error_need_verification_code'] = 'Пожалуйста, введите визуальный код проверки для получения результатов.';
$txt['error_bad_file'] = 'Извините, невозможно открыть файл: %1$s';
$txt['error_bad_line'] = 'Неправильно указана строка.';
$txt['error_draft_not_saved'] = 'There was an error saving the draft';

$txt['smiley_not_found'] = 'Смайл не найден.';
$txt['smiley_has_no_code'] = 'Этому смайлу не был присвоен код.';
$txt['smiley_has_no_filename'] = 'Не был назван файл этого смайла.';
$txt['smiley_not_unique'] = 'Смайл с таким кодом уже существует.';
$txt['smiley_set_already_exists'] = 'Набор смайлов с таким адресом(URL) уже существует';
$txt['smiley_set_not_found'] = 'Набор смайлов не найден';
$txt['smiley_set_dir_not_found'] = 'The directory of the smiley set %1$s is either invalid or cannot be accessed';
$txt['smiley_set_path_already_used'] = 'Адрес (URL) набора смайлов уже использовался другим набором смайлов.';
$txt['smiley_set_unable_to_import'] = 'Невозможно импортировать набор смайлов. Неверно указана директория, или к ней нет доступа.';

$txt['smileys_upload_error'] = 'Не удалось загрузить файлы.';
$txt['smileys_upload_error_blank'] = 'Все наборы смайлов должны иметь изображение!';
$txt['smileys_upload_error_name'] = 'Все смайлы должны иметь собственные имена!';
$txt['smileys_upload_error_illegal'] = 'Неверный тип.';

$txt['search_invalid_weights'] = 'Параметры поиска сконфигурированы неверно. Как минимум один фактор должен отличаться от нуля. Пожалуйста, сообщите об этой ошибке администратору..';
$txt['unable_to_create_temporary'] = 'Поиск не смог создать временную таблицу. Попробуйте еще раз.';

$txt['package_no_file'] = 'Не найден файл пакета модификаций!';
$txt['packageget_unable'] = 'Не удалось соединиться с сервером. Попробуйте использовать <a href="%1$s" target="_blank" class="new_win">этот адрес (URL)</a>.';
$txt['not_on_simplemachines'] = 'Извините, пакеты модификаций могут быть загружены только с сервера simplemachines.org.';
$txt['package_cant_uninstall'] = 'Этот пакет модификаций не установлен, или уже удален &mdash; нельзя удалить его.';
$txt['package_cant_download'] = 'Вы не можете загрузить или установить новый пакет модификаций, так как директория Пакетов Модификаций защищена от записи (CHMOD)!';
$txt['package_upload_error_nofile'] = 'Вы не выбрали пакет для загрузки.';
$txt['package_upload_error_failed'] = 'Не удалось загрузить пакет, проверьте права доступа на запись (CHMOD) для директории загрузки!';
$txt['package_upload_error_exists'] = 'Загружаемый файл уже существует на сервере. Пожалуйста, удалите его и попробуйте снова.';
$txt['package_upload_error_supports'] = 'Менеджер пакетов обрабатывает только эти типы файлов: %1$s.';
$txt['package_upload_error_broken'] = 'Загрузка пакета прервана следующей ошибкой:<br>&quot;%1$s&quot;';
$txt['package_theme_upload_error_broken'] = 'Theme upload failed due to the following error:<br>&quot;%1$s&quot;';

$txt['package_get_error_not_found'] = 'Пакет, который вы пытаетесь установить, не удалось разместить. Можете вручную загрузить пакет в директорию Packages.';
$txt['package_get_error_missing_xml'] = 'В пакете не хватает файла package-info.xml, который должен находиться в корневой директории пакета.';
$txt['package_get_error_is_zero'] = 'Несмотря на то, что пакет был загружен на сервер, он выглядит пустым. Проверьте, доступны ли для записи директория Packages и поддиректория &quot;temp&quot;. Если, по-прежнему, сталкиваетесь с этой проблемой, попробуйте распаковать содержимое пакета на своем компьютере и загрузить распакованные файлы в созданную поддиректорию в директории Packages и повторите попытку установки. Например, если пакет называется shout.tar.gz, нужно: <br>1) Загрузить пакет на свой компьютер и распаковать файлы.<br>2) С помощью клиента FTP создать новую директорию в директории &quot;Packages&quot;, например "shout".<br>3) Загрузить все файлы, распакованные из пакета, в созданную директорию.<br>4) Вернуться в менеджер пакетов и обновить страницу. Новый пакет будет автоматически обнаружен SMF.';
$txt['package_get_error_packageinfo_corrupt'] = 'Не удалось найти правильную информацию в файле package-info.xml, содержащемся в пакете. Возможно, в модификации ошибка, либо пакет поврежден.';
$txt['package_get_error_is_theme'] = 'You can\'t install a Theme from this section, please use the <a href="{MANAGETHEMEURL}">Themes and Layout</a> management page to upload it';
$txt['package_get_error_is_mod'] = 'You can\'t install a mod from this section, please use the <a href="{MANAGEMODURL}">Package manager</a> page to upload it';
$txt['package_get_error_theme_not_compatible'] = 'Your theme does not show it has compatibility with %1$s. Please contact the theme author.';
$txt['package_get_error_theme_no_based_on_found'] = 'The theme you\'re trying to install depends on another theme: %1$s, you need to install that theme first.';
$txt['package_get_error_theme_no_new_version'] = 'The theme you\'re trying to install is already installed or is an outdated version of it. The version you\'re trying to install is: %1$s and the version already installed is: %2$s.';

$txt['no_membergroup_selected'] = 'Не выбрана группа пользователей';
$txt['membergroup_does_not_exist'] = 'Такой группы пользователей не существует.';

$txt['at_least_one_admin'] = 'На форуме должен быть как минимум один администратор!';

$txt['error_functionality_not_windows'] = 'Извините, эта возможность в данный момент не доступна для серверов работающих под управлением Windows.';

// Don't use entities in the below string.
$txt['attachment_not_found'] = 'Вложение не найдено';

$txt['error_no_boards_selected'] = 'Раздел не выбран!';
$txt['error_no_boards_available'] = 'Sorry, there are no boards available to you at this time.';
$txt['error_invalid_search_string'] = 'Вы не указали строку поиска';
$txt['error_invalid_search_string_blacklist'] = 'Ваш запрос состоит из слишком незначительных слов. Попробуйте снова с другими словами.';
$txt['error_search_string_small_words'] = 'Длина слова должна быть хотя бы в два символа.';
$txt['error_query_not_specific_enough'] = 'Ваш запрос не слишком информативен. Попробуйте использовать более длинные слова или целые фразы.';
$txt['error_no_messages_in_time_frame'] = 'В заданном временном промежутке сообщений не найдено.';
$txt['error_no_labels_selected'] = 'Ни один параметр не выбран!';
$txt['error_no_search_daemon'] = 'Доступ к поиску запрещен';

$txt['profile_errors_occurred'] = 'При попытке сохранения настроек возникла следующая ошибка:';
$txt['profile_error_bad_offset'] = 'Неверно указана разница во времени';
$txt['profile_error_bad_timezone'] = 'The timezone specified is invalid';
$txt['profile_error_no_name'] = 'Вы не указали имя пользователя';
$txt['profile_error_digits_only'] = 'The \'number of posts\' box can only contain digits.';
$txt['profile_error_name_taken'] = 'Выбранное имя уже используется';
$txt['profile_error_name_too_long'] = 'Выбранное имя слишком длинное. Имя не может быть длиннее 60 символов.';
$txt['profile_error_no_email'] = 'Вы не указали электронный адрес';
$txt['profile_error_bad_email'] = 'Вы ввели неверный электронный адрес';
$txt['profile_error_email_taken'] = 'Существует пользователь, который указал данный адрес';
$txt['profile_error_no_password'] = 'Вы не ввели пароль';
$txt['profile_error_bad_new_password'] = 'Новый пароль не подходит';
$txt['profile_error_bad_password'] = 'Не верно указан пароль';
$txt['profile_error_bad_avatar'] = 'Ваш аватар не является графическим файлом';
$txt['profile_error_bad_avatar_invalid_url'] = 'The url you specified is invalid, please check it.';
$txt['profile_error_bad_avatar_too_large'] = 'The image you\'re trying to use surpasses the max width/height settings, please use a smaller one.';
$txt['profile_error_bad_avatar_fail_reencode'] = 'The image you uploaded was corrupted and the attempt to recover it failed.';
$txt['profile_error_password_short'] = 'Ваш пароль должен содержать как минимум ' . (empty($modSettings['password_strength']) ? 4 : 8) . ' символов.';
$txt['profile_error_password_restricted_words'] = 'Ваш пароль не должен содержать ваши имя, email, либо другую, доступную в вашем профиле, информацию.';
$txt['profile_error_password_chars'] = 'Ваш пароль должен содержать символы верхнего и нижнего регистров, а также цифры.';
$txt['profile_error_already_requested_group'] = 'Вы уже направили запрос на вступление в эту группу!';
$txt['profile_error_signature_not_yet_saved'] = 'The signature has not been saved.';
$txt['profile_error_personal_text_too_long'] = 'The personal text is too long.';
$txt['profile_error_user_title_too_long'] = 'The custom title is too long.';
$txt['profile_error_custom_field_mail_fail'] = 'The mail validation check returned an error, you need to enter a valid email format (user@domain).';
$txt['profile_error_custom_field_regex_fail'] = 'The regex verification returned an error, if you are unsure about what to type here, please contact the forum administrator.';

// Registration form.
$txt['under_age_registration_prohibited'] = 'Sorry, but users under the age of %1$d are not allowed to register on this forum.';
$txt['error_too_quickly'] = 'You went through registration a bit too quickly, faster than should normally be possible. Please give it a moment and try again.';
$txt['mysql_error_space'] = ' &mdash; проверьте место под базу данных или обратитесь к своему хостеру.';

$txt['icon_not_found'] = 'Иконка не найдена в используемой теме оформления. Пожалуйста, удостоверьтесь в том, что загрузили иконку на сервер, и попробуйте снова.';
$txt['icon_after_itself'] = 'Иконка не может идти сама после себя!';
$txt['icon_name_too_long'] = 'Имя иконки не может содержать более 16 символов';

$txt['name_censored'] = 'Имя, которое вы пытаетесь использовать — %1$s, содержит слово, подверженное цензуре. Попробуйте другое имя.';

$txt['poll_already_exists'] = 'В теме может быть только одно голосование!';
$txt['poll_not_found'] = 'Нет голосования, относящегося к этой теме!';

$txt['error_while_adding_poll'] = 'Следующие ошибки возникли при добавлении голосования:';
$txt['error_while_editing_poll'] = 'Следующие ошибки возникли при редактировании голосования:';

$txt['loadavg_search_disabled'] = 'Из-за высокой загрузки сервера, функция поиска временно отключена. Попробуйте воспользоваться поиском немного позже.';
$txt['loadavg_generic_disabled'] = 'Извините, из-за большой загрузки сервера эта функция временно отключена.';
$txt['loadavg_allunread_disabled'] = 'Невозможно найти все непрочитанные темы из-за высокой загрузки сервера.';
$txt['loadavg_unreadreplies_disabled'] = 'Сервер перегружен. Попробуйте еще раз немного позже.';
$txt['loadavg_show_posts_disabled'] = 'Попробуйте немного позже. Сообщения этого пользователя недоступны из-за высокой загрузки сервера.';
$txt['loadavg_unread_disabled'] = 'В настоящее время сервер форума перегружен запросами, поэтому вы не сможете просмотреть список непрочитанных тем.';
$txt['loadavg_userstats_disabled'] = 'Please try again later. This member\'s statistics are not currently available due to high load on the server.';

$txt['cannot_edit_permissions_inherited'] = 'Вы не можете напрямую редактировать унаследованные разрешения. Нужно редактировать "родительскую" группу, либо наследование группы пользователей.';

$txt['mc_no_modreport_specified'] = 'Нужно выбрать отчет, который вы хотите просмотреть.';
$txt['mc_no_modreport_found'] = 'Выбранный отчёт не существует или у вас нет прав на просмотр.';

$txt['st_cannot_retrieve_file'] = 'Не удалось получить файл %1$s.';
$txt['admin_file_not_found'] = 'Не удалось загрузить запрашиваемый файл: %1$s.';

$txt['themes_none_selectable'] = 'Одна из тем должна быть выбрана.';
$txt['themes_default_selectable'] = 'Должна быть выбрана тема оформления форума по умолчанию.';
$txt['ignoreboards_disallowed'] = 'Опция игнорирования разделов выключена.';

$txt['mboards_delete_error'] = 'Категория не выбрана!';
$txt['mboards_delete_board_error'] = 'Раздел не выбран!';

$txt['mboards_parent_own_child_error'] = 'Невозможно сделать раздел своим же подразделом.';
$txt['mboards_board_own_child_error'] = 'Невозможно сделать раздел своим же подразделом.';

$txt['smileys_upload_error_notwritable'] = 'Следующая папка смайлов не записываемая: %1$s';
$txt['smileys_upload_error_types'] = 'Изображения могут только этих форматов: %1$s.';

$txt['change_email_success'] = 'Ваш e-mail был изменен. Вам отправлено письмо для активации.';
$txt['resend_email_success'] = 'Новое письмо активации было успешно отправлено.';

$txt['custom_option_need_name'] = 'Эта опция профиля должна иметь имя!';
$txt['custom_option_not_unique'] = 'Название поля неуникально!';
$txt['custom_option_regex_error'] = 'The regex you entered is not valid';

$txt['warning_no_reason'] = 'Вы должны указать причину для изменения статуса предупреждения пользователя.';
$txt['warning_notify_blank'] = 'Вы выбрали оповещение пользователя о предупреждении, но оставили поле тема/сообщение пустым.';

$txt['cannot_connect_doc_site'] = 'Невозможно соединиться с сервером онлайн-документации Simple Machines. Пожалуйста, проверьте конфигурацию своего сервера на предмет разрешения сторонних соединений и попробуйте снова.';

$txt['movetopic_no_reason'] = 'Вы должны указать причину для перемещения этой темы, или отменить опцию \'Выберите тему для перенаправления\'.';

$txt['error_custom_field_too_long'] = 'Поле &quot;%1$s&quot; не может быть длиной больше чем %2$d символов.';
$txt['error_custom_field_invalid_email'] = 'Поле &quot;%1$s&quot; должно содержать действующий e-mail.';
$txt['error_custom_field_not_number'] = 'Поле &quot;%1$s&quot; должно содержать цифры.';
$txt['error_custom_field_inproper_format'] = 'Поле &quot;%1$s&quot; содержит информацию в неправильном формате.';
$txt['error_custom_field_empty'] = 'Поле &quot;%1$s&quot; не может быть оставлено пустым.';

$txt['email_no_template'] = 'Невозможно найти шаблон e-mail &quot;%1$s&quot;.';

$txt['search_api_missing'] = 'Невозможно найти API поиска! Пожалуйста, свяжитесь с администратором на предмет корректности сохраненных файлов.';
$txt['search_api_not_compatible'] = 'Выбранный API поиска форума устарел &mdash; форум переходит на стандартный поиск. Пожалуйста, проверьте файл %1$s.';

// Handling hook calls
$txt['hook_fail_loading_file'] = 'Hook call: The file at path: %s could not be loaded.';
$txt['hook_fail_call_to'] = 'Hook call: function "%1$s" in file %2$s could not be called.';

$txt['file_not_created'] = 'The file at "%1$s" could not be created. Please make sure the parent directory has the appropiate permissions';
$txt['file_minimize_fail'] = 'The file "%1$s" could not be located on the current or the default theme and therefore it wasn\'t included in the minified file.';

// SubActions failed attempt.
$txt['subAction_fail'] = 'The callable %s could not be called.';

// Restore topic/posts
$txt['cannot_restore_first_post'] = 'Невозможно восстановить первое сообщение в теме.';
$txt['parent_topic_missing'] = 'Изначальная тема сообщения, которое вы пытаетесь восстановить, была удалена.';
$txt['restored_disabled'] = 'Восстановление тем запрещено.';
$txt['restore_not_found'] = 'Следующие сообщения не могут быть восстановлены; возможно, тема, изначально содержащая их, была удалена: <ul style="margin-top: 0px;">%1$s</ul>Вам следует вручную удалить их.';

$txt['error_invalid_dir'] = 'Вы ввели неправильное имя директории.';

// json errors.
$txt['json_JSON_ERROR_DEPTH'] = 'Json decode error: The maximum stack depth has been exceeded';
$txt['json_JSON_ERROR_STATE_MISMATCH'] = 'Json decode error: Invalid or malformed JSON';
$txt['json_JSON_ERROR_CTRL_CHAR'] = 'Json decode error: Control character error, possibly incorrectly encoded';
$txt['json_JSON_ERROR_SYNTAX'] = 'Json decode error: Syntax error, malformed JSON';
$txt['json_JSON_ERROR_UTF8'] = 'Json decode error: Malformed UTF-8 characters, possibly incorrectly encoded';
$txt['json_JSON_ERROR_RECURSION'] = 'Json decode error: One or more recursive references in the value to be encoded';
$txt['json_JSON_ERROR_INF_OR_NAN'] = 'Json decode error: One or more NAN or INF values in the value to be encoded';
$txt['json_JSON_ERROR_UNSUPPORTED_TYPE'] = 'Json decode error: A value of a type that cannot be encoded was given';
$txt['json_unknown'] = 'Unknown error';

?>