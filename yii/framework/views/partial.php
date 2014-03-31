<? elseif($status === '1b'):?>

                                        <?= $this->partial(PATH2_PARTIALS.'share-this.phtml',
                                            array(
                                                'actionable' => array(
                                                    'tagname' => 'a',
                                                    'classname' => 'send-note-btn btn blue-btn',
                                                    'text'      => $translator->_('send-reminder'),
                                                ),
                                                'config' => array(
                                                    'title'      => $translator->_('send-reminder'),
                                                    'share_type' => 'user_invite',
                                                    'share_id'   => $id,
                                                    'note-key' => $status,
                                                    'has_invite_others' => true,
                                                ),
                                                'note_text'  => $translator->_('send'),
                                                'receivers' => array(
                                                    array(
                                                        'type' => 'user',
                                                        'id'   => $id,
                                                        'name' => $email,
                                                        'hex'  => '3784d3'
                                                    )
                                                )
                                            )
                                        )?>
                                        <div class="actionable-loading"></div>
