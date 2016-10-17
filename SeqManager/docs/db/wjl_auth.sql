INSERT INTO `wjl_auth` (`auth_id`, `auth_name`, `auth_pid`, `auth_c`, `auth_a`, `auth_path`, `auth_level`, `auth_time`, `auth_mod_time`, `condition`, `auth_uid`) VALUES (1, '测序管理', 0, '', '', '1', 0, 1473822830, 1473822831, 1, 1), 
(2, '引物管理', 0, '', '', '2', 0, 1473822830, 1473822831, 1, 1), 
(3, '文件管理', 0, '', '', '3', 0, 1473822830, 1473822831, 1, 1), 
(4, '类别管理', 0, '', '', '4', 0, 1473822830, 1473822831, 1, 1), 
(5, '位置管理', 0, '', '', '5', 0, 1473822830, 1473822831, 1, 1), 
(6, '用户管理', 0, '', '', '6', 0, 1473822830, 1473822831, 1, 1), 
(7, '系统管理', 0, '', '', '7', 0, 1473822830, 1473822831, 1, 1), 
(8, '回收站', 0, '', '', '8', 0, 1473822830, 1473822831, 1, 1), 
(9, '搜索', 0, '', '', '9', 0, 1473822830, 1473822831, 1, 1), 
(10, '帮助', 0, '', '', '10', 0, 1473822830, 1473822831, 1, 1), 
(11, '测序列表', 1, 'Seq', 'showlist', '1-11', 1, 1473822830, 1473822831, 1, 1), 
(12, '显示测序信息', 11, 'Seq', 'detail', '1-11-12', 2, 1473822830, 1473822831, 1, 1), 
(13, '添加测序信息', 1, 'Seq', 'add', '1-13', 1, 1473822830, 1473822831, 1, 1), 
(14, '更新测序信息', 11, 'Seq', 'upd', '1-11-14', 2, 1473822830, 1473822831, 1, 1), 
(15, '删除测序信息', 11, 'Seq', 'del', '1-11-15', 2, 1473822830, 1473822831, 1, 1), 
(16, '搜索测序信息', 1, 'Seq', 'search', '1-16', 1, 1473822830, 1473822831, 1, 1), 
(17, '引物列表', 2, 'Oligo', 'showlist', '2-17', 1, 1473822830, 1473822831, 1, 1), 
(18, '显示引物信息', 17, 'Oligo', 'detail', '2-17-18', 2, 1473822830, 1473822831, 1, 1), 
(19, '添加引物信息', 2, 'Oligo', 'add', '2-19', 1, 1473822830, 1473822831, 1, 1), 
(20, '更新引物信息', 17, 'Oligo', 'upd', '2-17-20', 2, 1473822830, 1473822831, 1, 1), 
(21, '删除引物信息', 17, 'Oligo', 'del', '2-17-21', 2, 1473822830, 1473822831, 1, 1), 
(22, '搜索引物信息', 2, 'Oligo', 'search', '2-22', 1, 1473822830, 1473822831, 1, 1), 
(23, '文件列表', 3, 'File', 'showlist', '3-23', 1, 1473822830, 1473822831, 1, 1), 
(24, '添加文件', 3, 'File', 'add', '3-24', 1, 1473822830, 1473822831, 1, 1), 
(25, '更新文件', 23, 'File', 'upd', '3-23-25', 2, 1473822830, 1473822831, 1, 1), 
(26, '删除文件', 23, 'File', 'del', '3-23-26', 2, 1473822830, 1473822831, 1, 1), 
(27, '搜索文件', 3, 'File', 'search', '3-27', 1, 1473822830, 1473822831, 1, 1), 
(28, '分类列表', 4, 'Cate', 'showlist', '4-28', 1, 1473822830, 1473822831, 1, 1), 
(29, '添加分类', 4, 'Cate', 'add', '4-29', 1, 1473822830, 1473822831, 1, 1), 
(30, '更新分类', 28, 'Cate', 'upd', '4-28-30', 2, 1473822830, 1473822831, 1, 1), 
(31, '删除分类', 28, 'Cate', 'del', '4-28-31', 2, 1473822830, 1473822831, 1, 1), 
(32, '标签列表', 4, 'Tag', 'showlist', '4-32', 1, 1473822830, 1473822831, 1, 1), 
(33, '添加标签', 4, 'Tag', 'add', '4-33', 1, 1473822830, 1473822831, 1, 1), 
(34, '更新标签', 32, 'Tag', 'upd', '4-32-34', 2, 1473822830, 1473822831, 1, 1), 
(35, '删除标签', 32, 'Tag', 'del', '4-32-35', 2, 1473822830, 1473822831, 1, 1), 
(36, '冰箱列表', 5, 'Fridge', 'showlist', '5-36', 1, 1473822830, 1473822831, 1, 1), 
(37, '添加冰箱', 5, 'Fridge', 'add', '5-37', 1, 1473822830, 1473822831, 1, 1), 
(38, '更新冰箱', 36, 'Fridge', 'upd', '5-36-38', 2, 1473822830, 1473822831, 1, 1), 
(39, '删除冰箱', 36, 'Fridge', 'del', '5-36-39', 2, 1473822830, 1473822831, 1, 1), 
(40, '盒子列表', 5, 'Box', 'showlist', '5-40', 1, 1473822830, 1473822831, 1, 1), 
(41, '添加盒子', 5, 'Box', 'add', '5-41', 1, 1473822830, 1473822831, 1, 1), 
(42, '更新盒子', 40, 'Box', 'upd', '5-40-42', 2, 1473822830, 1473822831, 1, 1), 
(43, '删除盒子', 40, 'Box', 'del', '5-40-43', 2, 1473822830, 1473822831, 1, 1), 
(44, '管理员列表', 6, 'Manager', 'showlist', '6-44', 1, 1473822830, 1473822831, 1, 1), 
(45, '添加管理员', 6, 'Manager', 'add', '6-45', 1, 1473822830, 1473822831, 1, 1), 
(46, '修改管理员', 44, 'Manager', 'upd', '6-44-46', 2, 1473822830, 1473822831, 1, 1), 
(47, '删除管理员', 44, 'Manager', 'del', '6-44-47', 2, 1473822830, 1473822831, 1, 1), 
(48, '权限列表', 7, 'Auth', 'showlist', '7-48', 1, 1473822830, 1473822831, 1, 1), 
(49, '添加权限', 7, 'Auth', 'add', '7-49', 1, 1473822830, 1473822831, 1, 1), 
(50, '修改权限', 48, 'Auth', 'upd', '7-48-50', 2, 1473822830, 1473822831, 1, 1), 
(51, '删除权限', 48, 'Auth', 'del', '7-48-50', 2, 1473822830, 1473822831, 1, 1), 
(52, '角色列表', 7, 'Role', 'showlist', '7-52', 1, 1473822830, 1473822831, 1, 1), 
(53, '添加角色', 7, 'Role', 'add', '7-53', 1, 1473822830, 1473822831, 1, 1), 
(54, '修改角色', 52, 'Role', 'upd', '7-52-54', 2, 1473822830, 1473822831, 1, 1), 
(55, '删除角色', 52, 'Role', 'del', '7-52-55', 2, 1473822830, 1473822831, 1, 1), 
(56, '分配权限', 52, 'Role', 'distribute', '7-52-56', 2, 1473822830, 1473822831, 1, 1), 
(57, '回收站列表', 8, 'Recycle', 'showlist', '8-57', 1, 1473822830, 1473822831, 1, 1), 
(58, '还原条目', 57, 'Recycle', 'restore', '8-57-58', 2, 1473822830, 1473822831, 1, 1), 
(59, '彻底删除', 57, 'Recycle', 'delete', '8-57-59', 2, 1473822830, 1473822831, 1, 1), 
(60, '我的搜索', 9, 'Search', 'index', '9-60', 1, 1473822830, 1473822831, 1, 1), 
(62, '快速入门', 10, 'Help', 'index', '10-62', 1, 1473822830, 1473822831, 1, 1), 
(63, '用户手册', 10, 'Help', 'article', '10-63', 1, 1473822830, 1473822831, 1, 1), 
(64, '关于本系统', 10, 'Help', 'about', '10-64', 1, 1473822830, 1473822831, 1, 1), 
(65, '重置密码', 44, 'Manager', 'resetPwd', '6-44-65', 2, 1473822830, 1473822831, 1, 1), 
(67, '重置自己的密码', 44, 'Manager', 'resetMyPwd', '6-44-67', 2, 1473822830, 1473822831, 1, 1), 
(68, '显示文件信息', 23, 'File', 'detail', '3-23-68', 2, 1473822830, 1473822831, 1, 1);