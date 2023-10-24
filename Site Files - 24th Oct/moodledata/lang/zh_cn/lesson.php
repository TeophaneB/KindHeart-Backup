<?php
// This file is part of Moodle - https://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * Strings for component 'lesson', language 'zh_cn', version '3.9'.
 *
 * @package     lesson
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accesscontrol'] = '访问控制';
$string['actionaftercorrectanswer'] = '回答正确之后的动作';
$string['actionaftercorrectanswer_help'] = '正确回答问题之后，有三个选项决定下一页跳转到哪里：

* 正常 - 跟随练习路径继续
* 显示一个没看过的页面 - 按随机顺序显示页面。每个页面只会显示一次
* 显示一个未回答的页面 - 按随机顺序显示页面。有未回答的问题的页面会被重新显示';
$string['actions'] = '行为';
$string['activitylink'] = '链接到下一个活动';
$string['activitylink_help'] = '想在练习结束时显示一个到课程中其它活动的链接，请在下拉列表中选择该活动。';
$string['activitylinkname'] = '转到{$a}';
$string['activityoverview'] = '你有到期的练习';
$string['addabranchtable'] = '新建内容页';
$string['addanendofbranch'] = '新建分支结束页';
$string['addanewpage'] = '新建一个页面';
$string['addaquestionpage'] = '新建题目页';
$string['addaquestionpagehere'] = '在此新建题目页';
$string['addbranchtable'] = '添加内容页面';
$string['addcluster'] = '新建簇';
$string['addedabranchtable'] = '新建了一个内容页';
$string['addedanendofbranch'] = '新建了一个分支结束页';
$string['addedaquestionpage'] = '新建了一个题目页';
$string['addedcluster'] = '新建了一个簇';
$string['addedendofcluster'] = '新建了一个簇结束页';
$string['addendofbranch'] = '新建分支结束页';
$string['addendofcluster'] = '新建簇结束页';
$string['addessay'] = '新建一个问答题页';
$string['additionalattemptsremaining'] = '已完成，你能重新尝试本练习';
$string['addmatching'] = '新建一个匹配题页面';
$string['addmultichoice'] = '新建一个选择题（可多选）页';
$string['addnewgroupoverride'] = '添加群组覆盖';
$string['addnewuseroverride'] = '添加用户覆盖';
$string['addnumerical'] = '新建一个数字题页面';
$string['addpage'] = '新建页面';
$string['addshortanswer'] = '新建一个填空题页面';
$string['addtruefalse'] = '新建一个判断正/误题页面';
$string['allotheranswers'] = '所有其他答案';
$string['allotheranswersjump'] = '所有其他答案都跳转了';
$string['allotheranswersscore'] = '所有其他答案得分';
$string['allowofflineattempts'] = '允许移动应用离线使用该程序教学';
$string['allowofflineattempts_help'] = '如果启用，移动应用程序用户可以下载该程序教学并离线使用。所有可能的答案和正确的回答也将被下载。注意:如果有时间限制，就不能离线使用。';
$string['anchortitle'] = '主内容头';
$string['and'] = '与';
$string['answer'] = '回答';
$string['answeredcorrectly'] = '回答正确。';
$string['answersfornumerical'] = '计算题的答案应该是若干对匹配的最小值和最大值';
$string['arrangebuttonshorizontally'] = '水平排列内容按钮？';
$string['attempt'] = '尝试：{$a}';
$string['attemptheader'] = '尝试';
$string['attemptinfonograde'] = '{$a->timestart}（{$a->duration}）';
$string['attemptinfowithgrade'] = '{$a->grade}% {$a->timestart} ({$a->duration})';
$string['attempts'] = '尝试';
$string['attemptsdeleted'] = '已删除尝试';
$string['attemptsremaining'] = '您还可尝试{$a}次';
$string['available'] = '开放时间';
$string['averagescore'] = '平均分';
$string['averagetime'] = '平均用时';
$string['branch'] = '内容';
$string['branchtable'] = '内容';
$string['cancel'] = '取消';
$string['cannotfindanswer'] = '错误：找不到选项';
$string['cannotfindattempt'] = '错误：找不到尝试';
$string['cannotfindessay'] = '错误：找不到问答题';
$string['cannotfindfirstgrade'] = '错误：找不到成绩';
$string['cannotfindfirstpage'] = '找不到首页';
$string['cannotfindgrade'] = '错误：找不到成绩';
$string['cannotfindnewestgrade'] = '错误：找不到最新成绩';
$string['cannotfindnextpage'] = '程序教学备份：找不到下一页！';
$string['cannotfindpagerecord'] = '添加分支结尾：找不到页面记录';
$string['cannotfindpages'] = '找不到练习页面';
$string['cannotfindpagetitle'] = '确认删除：找不到页面标题';
$string['cannotfindpreattempt'] = '找不到之前的尝试记录！';
$string['cannotfindrecords'] = '错误：找不到练习记录';
$string['cannotfindtimer'] = '错误：找不到练习时间记录';
$string['cannotfinduser'] = '错误：找不到用户';
$string['canretake'] = '{$a}允许重学';
$string['casesensitive'] = '使用正则表达式';
$string['casesensitive_help'] = '勾选此选择框表示使用正则表达式分析学生的答案。';
$string['checkbranchtable'] = '检查内容页面';
$string['checkedthisone'] = '选择了此项。';
$string['checknavigation'] = '检查该课导航';
$string['checkquestion'] = '检查题目';
$string['classstats'] = '班级统计';
$string['clicktodownload'] = '点击下面链接下载文件';
$string['closebeforeopen'] = '不能更新这个练习。你指定的关闭时间早于开放时间。';
$string['cluster'] = '簇';
$string['clusterjump'] = '隐藏在簇中的题目';
$string['clustertitle'] = '簇';
$string['collapsed'] = '折叠的';
$string['comments'] = '您的评价';
$string['completed'] = '已完成';
$string['completederror'] = '完成此练习';
$string['completethefollowingconditions'] = '在您继续前您必须完成下面的课程<b>{$a}</b>';
$string['completionendreached'] = '需要最后到达';
$string['completionendreached_desc'] = '学生需要到达该程序教学的最后一页才能完成这个活动';
$string['completiontimespent'] = '学生必须至少做这个活动';
$string['completiontimespentdesc'] = '学生必须至少做这个活动 {$a}';
$string['completiontimespentgroup'] = '需要耗时';
$string['conditionsfordependency'] = '依赖的前提';
$string['configintro'] = '这里设置的值定义了在创建新程序教学活动时设置表单中使用的默认值。指定为高级的设置只显示在“显示更多……”点击的链接。';
$string['configmaxanswers'] = '缺省每页最多选项数';
$string['configmediaclose'] = '在打开媒体文件的弹出窗口中显示关闭按钮';
$string['configmediaheight'] = '设置开媒体文件的弹出窗口的高度';
$string['configmediawidth'] = '设置开媒体文件的弹出窗口的宽度';
$string['configpassword_desc'] = '进入这个程序教学，是否需要一个密码。';
$string['configslideshowbgcolor'] = '幻灯片模式的背景色，如果激活了该模式的话';
$string['configslideshowheight'] = '幻灯片模式的高度，如果激活了该模式的话';
$string['configslideshowwidth'] = '幻灯片模式的宽度，如果激活了该模式的话';
$string['configtimelimit_desc'] = '如果设置了一个时间限制，那么在该程序教学开始的时候就会显示一个警告，并且显示一个倒计时计时器。如果设置为0，则没有时间限制。';
$string['confirmdelete'] = '删除页面';
$string['confirmdeletionofthispage'] = '确认删除该页';
$string['congratulations'] = '祝贺你们——课程结束了';
$string['continue'] = '继续';
$string['continuetoanswer'] = '继续修改答案。';
$string['continuetonextpage'] = '继续到下一页。';
$string['correctanswerjump'] = '回答正确跳转到';
$string['correctanswerscore'] = '回答正确得分';
$string['correctresponse'] = '给正确答案的响应';
$string['createaquestionpage'] = '新建一个问题页';
$string['credit'] = '学分';
$string['customscoring'] = '是否自定义分数';
$string['customscoring_help'] = '如启用，可以给每个答案一个分数值（可以是正数或负数）。';
$string['deadline'] = '截止时间';
$string['defaultessayresponse'] = '您的简答题将由您的老师评分。';
$string['deleteallattempts'] = '删除所有对练习的尝试';
$string['deletedefaults'] = '删除{$a}默认课程';
$string['deletedpage'] = '删除此页';
$string['deletepagenamed'] = '删除页: {$a}';
$string['deleting'] = '删除中';
$string['deletingpage'] = '删除页面：{$a}';
$string['dependencyon'] = '依赖关系';
$string['dependencyon_help'] = '此设置基于学生在同一课程中其它教程的表现，限制他们对此程序教学的访问权。可以使用花费时间、是否完成或“成绩高于”的各种组合。';
$string['description'] = '描述';
$string['deselectallattempts'] = '取消选择所有尝试';
$string['detailedstats'] = '详细统计';
$string['didnotanswerquestion'] = '未回答此题。';
$string['didnotreceivecredit'] = '没有获得学分';
$string['disabled'] = '禁用';
$string['displaydefaultfeedback'] = '是否显示默认反馈信息';
$string['displaydefaultfeedback_help'] = '如果启用，当某个特定的问题没有设定反馈内容时，将显示默认反馈：“此答案正确”和“此答案错误”。 ';
$string['displayinleftmenu'] = '在左侧菜单中显示？';
$string['displayleftif'] = '显示左侧菜单，仅当成绩高于';
$string['displayleftif_help'] = '此设置决定在看到左侧菜单之前是否必须先获得一定的分数。这将强制学生在第一次访问时必须浏览完整个练习。在达到分数线后，他们就可以使用左侧菜单进行复习了。';
$string['displayleftmenu'] = '显示左侧菜单';
$string['displayleftmenu_help'] = '开启此选项后，会显示页面列表。';
$string['displayofgrade'] = '显示成绩（仅适用于学生）';
$string['displayreview'] = '提供重试一道题目的选项';
$string['displayreview_help'] = '如果启用，当学生未能正确回答问题时，可以选择再答一次但不计分，或者继续练习。';
$string['displayscorewithessays'] = '<p>您在自动评分的题目中得分{$a->score}/{$a->tempmaxgrade}。</p>
<p>您的{$a->essayquestions}道简答题将稍后评分，并添加到您的最终得分中。</p>
<p>您当前不包含简答题的成绩是：{$a->score} /{$a->grade}。</p>';
$string['displayscorewithoutessays'] = '您的得分是{$a->score}/{$a->grade}。';
$string['duplicatepagenamed'] = '复制页: {$a}';
$string['edit'] = '编辑';
$string['editbranchtable'] = '编辑一个内容页';
$string['editcluster'] = '编辑一个簇';
$string['editendofbranch'] = '编辑一个分支结束页';
$string['editendofcluster'] = '编辑一个簇结束页';
$string['editessay'] = '编辑一个简答题页';
$string['editingquestionpage'] = '编辑{$a}题目页面';
$string['editlessonsettings'] = '修改程序教学的设置';
$string['editmatching'] = '编辑一个匹配题页';
$string['editmultichoice'] = '编辑一个选择题页';
$string['editnumerical'] = '编辑一个数字题页';
$string['editoverride'] = '编辑覆盖';
$string['editpage'] = '编辑页面内容';
$string['editpagecontent'] = '编辑页面内容';
$string['editquestion'] = '编辑一个问题页';
$string['editshortanswer'] = '编辑一个填空题页';
$string['edittruefalse'] = '编辑一个判断正误题页';
$string['email'] = 'Email';
$string['emailallgradedessays'] = 'Email所有的已评分的问答题';
$string['emailgradedessays'] = 'Email已评分的问答题';
$string['emailsuccess'] = 'Email发送成功';
$string['emptypassword'] = '密码不能为空';
$string['enabled'] = '启用';
$string['endofbranch'] = '分支结束';
$string['endofcluster'] = '簇结束';
$string['endofclustertitle'] = '簇结束';
$string['endoflesson'] = '练习结束';
$string['enteredthis'] = '输入这个';
$string['enterpassword'] = '请输入密码：';
$string['eolstudentoutoftime'] = '注意：您已经超过了本程序教学规定的时间。您最后回答的题目如果是在时限之后作答，那么可能不会被算分。';
$string['eolstudentoutoftimenoanswers'] = '您没有回答任何题目。您在本程序教学中获得 0 分。';
$string['essay'] = '问答题';
$string['essayemailmessage2'] = '<p>问答题：<blockquote>{$a->question}</blockquote></p><p>您的回答：<blockquote><em>{$a->response}</em></blockquote></p><p>评分人评论：<blockquote><em>{$a->comment}</em></blockquote></p><p>此问答题您得到了{$a->earned}分（满分{$a->outof}）。</p><p>您此程序教学的成绩已经变为{$a->newgrade}%。</p>';
$string['essayemailmessagesmall'] = '<p>你已经收到了{$a->outof}中的{$a->outof}的{$a->RENEED}作为这篇文章的题目。</p><p>你的{$a->LESSION}课的成绩已经更改为{$a->newgrade}%</p>';
$string['essayemailsubject'] = '题目{$a}的成绩';
$string['essaynotgradedyet'] = '这篇文章还没有评分';
$string['essayresponses'] = '论文回复';
$string['essays'] = '问答题';
$string['essayscore'] = '问答题成绩';
$string['eventcontentpageviewed'] = '内容页视图';
$string['eventessayassessed'] = '论文评估';
$string['eventessayattemptviewed'] = '征文';
$string['eventlessonended'] = '程序教学结束';
$string['eventlessonrestarted'] = '重新开始程序教学';
$string['eventlessonresumed'] = '恢复程序教学';
$string['eventlessonstarted'] = '开始程序教学';
$string['eventoverridecreated'] = '程序教学覆盖性创建';
$string['eventoverridedeleted'] = '课程覆盖已删除';
$string['eventoverrideupdated'] = '课程覆盖已更新';
$string['eventpagecreated'] = '建立的页';
$string['eventpagedeleted'] = '删除的页';
$string['eventpagemoved'] = '移动的页';
$string['eventpageupdated'] = '更新页';
$string['eventquestionanswered'] = '回答的问题';
$string['eventquestionviewed'] = '查看问题';
$string['false'] = '错误';
$string['fileformat'] = '文件格式';
$string['finalwrong'] = '不完全是。';
$string['finish'] = '结束';
$string['firstanswershould'] = '第一个选项应当跳转到"正确"页';
$string['firstwrong'] = '您答错了。您想再试一次这个题目吗?(即使您现在正确地回答了这个题目，它也不计入您的最终得分。)';
$string['flowcontrol'] = '流程控制';
$string['fractionsaddwrong'] = '您选的得分总和不等于 100%<br />而是等于 {$a}%<br />您想回去改正这个问题吗？';
$string['fractionsnomax'] = '答案中应该有一个是 100%，
<br />这样这个题目才有可能得满分。
<br />您想回去改正这个问题吗？';
$string['full'] = '展开的';
$string['general'] = '一般';
$string['gotoendoflesson'] = '转到程序教学末尾';
$string['grade'] = '成绩';
$string['gradebetterthan'] = '比(%)成绩好';
$string['gradebetterthanerror'] = '得到一个高于{$a}%的成绩';
$string['graded'] = '已评分';
$string['gradeessay'] = '为问答题打分';
$string['gradeis'] = '成绩是{$a}';
$string['gradeoptions'] = '分数选项';
$string['groupoverrides'] = '群组覆盖';
$string['groupoverridesdeleted'] = '删除的群组覆盖';
$string['groupsnone'] = '没有您可以访问的组。';
$string['handlingofretakes'] = '如何处理多个成绩';
$string['handlingofretakes_help'] = '如果允许学生重新学习，此设置决定此程序教学的得分是所有尝试的平均分还是最高分。';
$string['havenotgradedyet'] = '尚未打分';
$string['here'] = '这里';
$string['highscore'] = '高分';
$string['hightime'] = '高用时';
$string['importcount'] = '导入{$a}道题目';
$string['importquestions'] = '导入题目';
$string['importquestions_help'] = '通过文本文件导入各种格式的题目。';
$string['inactiveoverridehelp'] = '*此覆盖处于非活动状态，因为用户对活动的访问受到限制。这可能是由于组或角色分配、其他访问限制或隐藏的活动造成的';
$string['indicator:cognitivedepth'] = '程序教学活动认知深度';
$string['indicator:cognitivedepth_help'] = '这个指标是基于学生在程序教学活动中所达到的认知深度。';
$string['indicator:cognitivedepthdef'] = '课程认知';
$string['indicator:cognitivedepthdef_help'] = '在此分析间隔期间，参与者已达到课程活动提供的认知参与百分比（级别=无查看、查看、提交、查看反馈、评论反馈、查看反馈后重新提交）';
$string['indicator:cognitivedepthdef_link'] = 'Learning_analytics_indicators#Cognitive_depth';
$string['indicator:socialbreadth'] = '程序教学活动社会宽度';
$string['indicator:socialbreadth_help'] = '这个指标是基于学生在程序教学活动中所达到的社会宽度。';
$string['indicator:socialbreadthdef'] = '社会课';
$string['indicator:socialbreadthdef_help'] = '在此分析间隔期间，参与者已达到课程活动提供的社会参与度的百分比（级别=不参与、参与者单独参与、参与者与其他人一起参与）';
$string['indicator:socialbreadthdef_link'] = 'Learning_analytics_indicators#Social_breadth';
$string['insertedpage'] = '已经插入页面';
$string['invalidfile'] = '无效文件';
$string['invalidid'] = '没有课程模块ID或练习ID传入';
$string['invalidlessonid'] = '练习ID不正确';
$string['invalidoverrideid'] = '无效的覆盖id';
$string['invalidpageid'] = '无效页面ID';
$string['jump'] = '跳转';
$string['jumps'] = '跳转';
$string['jumps_help'] = '每个题目页的答案或内容页的描述都有一个对应的跳转。跳转可以是相对的，比如当前页或下一页，也可以绝对指向程序教学中的任意一页。';
$string['jumpsto'] = '跳转到<em>{$a}</em>';
$string['leftduringtimed'] = '您已在定时程序教学中离开。<br/>请点击“继续”重新开始。';
$string['leftduringtimednoretake'] = '您已在定时程序教学中离开。<br/>不允许您重新开始或继续。';
$string['leftduringtimedsession'] = '你在一节定时课程中离开了';
$string['lesson:addinstance'] = '添加一个新练习';
$string['lesson:edit'] = '编辑程序教学活动';
$string['lesson:grade'] = '年级课作文问题';
$string['lesson:manage'] = '管理程序教学活动';
$string['lesson:manageoverrides'] = '管理课程覆盖';
$string['lesson:view'] = '查看课程活动';
$string['lesson:viewreports'] = '查看程序教学报表';
$string['lessonclosed'] = '此程序教学在 {$a} 关闭。';
$string['lessoncloses'] = '关闭程序教学';
$string['lessoncloseson'] = '程序教学在{$a}关闭';
$string['lessoneventcloses'] = '{$a}关闭';
$string['lessoneventopens'] = '{$a}打开';
$string['lessonformating'] = '程序教学显示格式';
$string['lessonmenu'] = '程序教学菜单';
$string['lessonname'] = '课程：{$a}';
$string['lessonnotready'] = '这个程序教学还没有准备好。请与{$a}联系。';
$string['lessonnotready2'] = '此程序教学还没准备。';
$string['lessonopen'] = '本程序教学将在 {$a} 开放。';
$string['lessonopens'] = '开放程序教学';
$string['lessonpagelinkingbroken'] = '找不到第一个页面。程序教学的页面链接一定损坏了。请与管理员联系。';
$string['lessonstats'] = '程序教学统计';
$string['linkedmedia'] = '链接的媒体';
$string['loginfail'] = '登录错误，请重试…';
$string['lowscore'] = '低分';
$string['lowtime'] = '短用时';
$string['manualgrading'] = '问答题评分';
$string['matchesanswer'] = '答案匹配';
$string['matching'] = '匹配题';
$string['matchingpair'] = '匹配对{$a}';
$string['maxgrade'] = '最高分';
$string['maxgrade_help'] = '此设置决定此程序教学的最高分。如果设为0，此程序教学将不会出现在成绩页面上。';
$string['maximumnumberofanswersbranches'] = '最大选项数';
$string['maximumnumberofanswersbranches_help'] = '此设置决定在此程序教学中可以使用的选项的最大个数。如果只使用判断题，那么可以设为0。此设置随时可以改变，因为它只影响教师界面，不影响数据。';
$string['maximumnumberofattempts'] = '允许试答次数';
$string['maximumnumberofattempts_help'] = '此设置决定每个问题最多可以回答的次数。如果持续回答错误，当达到此最大值时，会显示教程的下一页。';
$string['maximumnumberofattemptsreached'] = '达到最大尝试次数-移至下一页';
$string['mediaclose'] = '显示关闭按钮';
$string['mediafile'] = '弹出文件或网页';
$string['mediafile_help'] = '如果想在程序教学开始时弹出一个窗口，请选择在窗口里显示的文件。每个教程页面都会有一个重新打开此弹出窗口的链接，可以在需要的时候使用。';
$string['mediafilepopup'] = '点击这里查看';
$string['mediaheight'] = '弹出窗口高度：';
$string['mediawidth'] = '弹出窗口宽度：';
$string['messageprovider:graded_essay'] = '程序教学评分通知';
$string['minimumnumberofquestions'] = '至少回答题目数';
$string['minimumnumberofquestions_help'] = '此设置决定用来计算此活动成绩的最少题目数量。如果此教程包含一个或多个内容页面，那么最小题目数应设为0。

假如它被设为20，那么在教程的起始页会显示下面文字：“在此教程中，希望您回答至少20个问题。 如果愿意，您可以回答更多问题。但是，如果您回答少于20个问题，您的成绩将按照回答了20个问题的方式计算。”';
$string['missingname'] = '请输入昵称';
$string['modattempts'] = '允许学生检查';
$string['modattempts_help'] = '如果启用，学生可以再次从头浏览此程序教学。';
$string['modattemptsnoteacher'] = '学生回顾仅适用于学生。';
$string['modulename'] = '程序教学';
$string['modulename_help'] = '程序教学模块使教师可以为学生创造自适应性的学习体验。它由一系列的页面组成，每个页面都可以包含题目。';
$string['modulename_link'] = 'mod/lesson/view';
$string['modulenameplural'] = '程序教学';
$string['move'] = '移动页面';
$string['movedpage'] = '已移动的页面';
$string['movepagehere'] = '移动页面到此';
$string['movepagenamed'] = '移动页面: {$a}';
$string['moving'] = '移动页面：{$a}';
$string['multianswer'] = '多项选择';
$string['multianswer_help'] = '如果有多个正确答案，就勾选此框。';
$string['multichoice'] = '选择题';
$string['multipleanswer'] = '多个答案';
$string['nameapproved'] = '名称核准';
$string['namereject'] = '很抱歉，您的名称被过滤器拒绝。<br/>请尝试其他的名字';
$string['new'] = '新的';
$string['nextpage'] = '下一页';
$string['noanswer'] = '一个或多个题目没有作答。 请返回并提交答案。';
$string['noattemptrecordsfound'] = '没有发现尝试记录:没有给定成绩';
$string['nobranchtablefound'] = '没找到内容页面';
$string['noclose'] = '无截止日期';
$string['nocommentyet'] = '还没有意见';
$string['nocoursemods'] = '没找到活动的';
$string['nocredit'] = '没有学分';
$string['nodeadline'] = '没有最后期限';
$string['noessayquestionsfound'] = '此程序教学中没有问答题。';
$string['nohighscores'] = '没有最高成绩';
$string['nolessonattempts'] = '还没有人尝试此程序教学。';
$string['nolessonattemptsgroup'] = '{$a}小组成员还没有尝试过此程序教学。';
$string['none'] = '没有一个';
$string['nooneansweredcorrectly'] = '没有人回答正确。';
$string['nooneansweredthisquestion'] = '没有人回答此题。';
$string['noonecheckedthis'] = '无人选择此项。';
$string['nooneenteredthis'] = '没有人输入这个。';
$string['noonehasanswered'] = '还没有人回答问答题。';
$string['noonehasansweredgroup'] = '{$a}还没有人回答过一个论文问题。';
$string['noopen'] = '没有开放日期';
$string['nooverridedata'] = '必须至少替代一个课程设置。';
$string['noretake'] = '您不可以重新学习此程序教学。';
$string['normal'] = '常规-按照自定义流程';
$string['notcompleted'] = '没有完成';
$string['notcompletedwithdate'] = '未完成（{$a}）';
$string['notdefined'] = '没有定义';
$string['notenoughsubquestions'] = '没有定义足够的小题!<br />您要退回去修改吗？';
$string['notenoughtimespent'] = '您在{$a->TimePent}中完成了本课程，该时间小于所需的{$a->timerequired}时间。您可能需要再次尝试这一课。';
$string['notgraded'] = '未评分';
$string['notitle'] = '没有标题';
$string['notyetcompleted'] = '课程已开始，但尚未完成';
$string['numberofcorrectanswers'] = '正确回答数：{$a}';
$string['numberofcorrectanswersheader'] = '正确答案的数目';
$string['numberofcorrectmatches'] = '正确匹配数：{$a}';
$string['numberofpagestoshow'] = '显示多少页';
$string['numberofpagestoshow_help'] = '此设置决定一个教程中可以显示多少个页面。它只对按随机顺序（当“回答正确后的动作”设为“显示一个未浏览的页面”或“显示一个未回答的页面”时）显示页面的教程有用。如果设为0，那么所有页面都会被显示。';
$string['numberofpagesviewed'] = '回答的题目数：{$a}';
$string['numberofpagesviewedheader'] = '回答的问题数量';
$string['numberofpagesviewednotice'] = '已回答题数：{$a->nquestions}（您至少要回答{$a->minquestions}道题）';
$string['numerical'] = '计算题';
$string['numericanswer'] = '数字答案';
$string['numericanswer_help'] = '可以使用冒号指定单个数字或数字范围。例如，2:5表示任何介于2和5之间且包含2和5的答案都是正确的。';
$string['offlinedatamessage'] = '您已使用移动设备进行了此尝试。上次将数据保存到此站点{$a}是在{$a}之前。请检查您没有任何未保存的工作。';
$string['ongoing'] = '显示即时分数';
$string['ongoing_help'] = '如果启用，每个页面都会显示学生已经获得的分数和目前的总分。';
$string['ongoingcustom'] = '到目前为止，您已经获得了{$a->score}/{$a->currenthigh} 分。';
$string['ongoingnormal'] = '您已经在{$a->viewed}次尝试中正确回答了{$a->correct}次。';
$string['onpostperpage'] = '每个成绩只能发布一次';
$string['openafterclose'] = '您已在关闭日期之后指定打开日期';
$string['options'] = '选项';
$string['or'] = '或';
$string['ordered'] = '已排序的';
$string['other'] = '其它';
$string['outof'] = '超出 {$a}';
$string['override'] = '推翻';
$string['overridedeletegroupsure'] = '确实要删除组{$a}的覆盖吗？';
$string['overridedeleteusersure'] = '确实要删除用户{$a}的覆盖吗？';
$string['overridegroup'] = '覆盖组';
$string['overridegroupeventname'] = '{$a->lesson}-{$a->group}';
$string['overrides'] = '覆盖';
$string['overrideuser'] = '覆盖用户';
$string['overrideusereventname'] = '{$a->lesson}-覆盖';
$string['overview'] = '概览';
$string['overview_help'] = '一个程序教学由一系列的页面和可选的内容页构成。一个页面包含一些内容，且通常以一个问题结束。问题的每个答案都有一个对应的跳转。这个跳转可以是相对的，比如本页或下一页，也可以是绝对的，指向本程序教学中的任意一页。内容页面包含到程序教学中其它页面的链接，就像一个目录一样。';
$string['page'] = '页面：{$a}';
$string['page-mod-lesson-edit'] = '程序教学编辑页面';
$string['page-mod-lesson-view'] = '查看或预览程序教学页面';
$string['page-mod-lesson-x'] = '任意程序教学页面';
$string['pageanswers'] = '页面问题';
$string['pagecontents'] = '页面内容';
$string['pageresponses'] = '页面响应';
$string['pages'] = '页面';
$string['pagetitle'] = '页面标题';
$string['password'] = '设置密码';
$string['passwordprotectedlesson'] = '程序教学{$a}受密码保护。';
$string['pleasecheckoneanswer'] = '请选择一个答案';
$string['pleasecheckoneormoreanswers'] = '请选择一个或多个选项';
$string['pleaseenteryouranswerinthebox'] = '请在框内填上答案';
$string['pleasematchtheabovepairs'] = '请匹配以上内容';
$string['pluginadministration'] = '程序教学管理';
$string['pluginname'] = '程序教学';
$string['pointsearned'] = '获得分数';
$string['postprocesserror'] = '后处理时发生错误！';
$string['postsuccess'] = '发表成功';
$string['practice'] = '实践程序教学';
$string['practice_help'] = '实践程序教学不会出现在成绩单中。';
$string['preprocesserror'] = '预处理时发生错误！';
$string['prerequisiteisobsolete'] = '“必备课程”选项将被删除。请改用访问限制。';
$string['prerequisitelesson'] = '必修课';
$string['preview'] = '预览';
$string['previewlesson'] = '预览{$a}';
$string['previewpagenamed'] = '预览页面: {$a}';
$string['previouspage'] = '上一页';
$string['privacy:metadata:attempts'] = '页面尝试的记录';
$string['privacy:metadata:attempts:answerid'] = '答案是';
$string['privacy:metadata:attempts:correct'] = '尝试是否正确';
$string['privacy:metadata:attempts:pageid'] = '页面ID';
$string['privacy:metadata:attempts:retry'] = '尝试号码';
$string['privacy:metadata:attempts:timeseen'] = '进行尝试的时间';
$string['privacy:metadata:attempts:useranswer'] = '有关用户答案的详细信息';
$string['privacy:metadata:attempts:userid'] = '用户ID';
$string['privacy:metadata:branch'] = '查看页面的记录';
$string['privacy:metadata:branch:flag'] = '是否随机计算下一页';
$string['privacy:metadata:branch:nextpageid'] = '下一页ID';
$string['privacy:metadata:branch:pageid'] = '页面ID';
$string['privacy:metadata:branch:retry'] = '尝试号码';
$string['privacy:metadata:branch:timeseen'] = '查看页面的时间';
$string['privacy:metadata:branch:userid'] = '用户ID';
$string['privacy:metadata:grades'] = '每节课的成绩记录';
$string['privacy:metadata:grades:completed'] = '评分的日期';
$string['privacy:metadata:grades:grade'] = '给的分数';
$string['privacy:metadata:grades:userid'] = '用户ID';
$string['privacy:metadata:overrides'] = '每节课的覆盖记录';
$string['privacy:metadata:overrides:available'] = '可以尝试上课的时间';
$string['privacy:metadata:overrides:deadline'] = '完成课程的最后期限。';
$string['privacy:metadata:overrides:maxattempts'] = '最大尝试次数';
$string['privacy:metadata:overrides:password'] = '访问课程的密码';
$string['privacy:metadata:overrides:retake'] = '是否允许重新拍摄';
$string['privacy:metadata:overrides:review'] = '是否允许再次尝试一个问题';
$string['privacy:metadata:overrides:timelimit'] = '完成课程的时间限制，以秒为单位。';
$string['privacy:metadata:overrides:userid'] = '用户ID';
$string['privacy:metadata:timer'] = '试课记录';
$string['privacy:metadata:timer:completed'] = '尝试是否完成';
$string['privacy:metadata:timer:lessontime'] = '我们记录活动的最后时刻';
$string['privacy:metadata:timer:starttime'] = '尝试开始的日期';
$string['privacy:metadata:timer:timemodifiedoffline'] = '我们从移动应用程序录制活动的最后一刻';
$string['privacy:metadata:timer:userid'] = '用户ID';
$string['privacy:metadata:userpref:lessonview'] = '编辑课程时的首选显示模式';
$string['privacy:path:essayanswers'] = '论文答案';
$string['privacy:path:essayresponses'] = '论文回复';
$string['privacy:path:pages'] = '页';
$string['processerror'] = '处理是发生错误！';
$string['progressbar'] = '进度条';
$string['progressbar_help'] = '如果启用，在程序教学页面底部会显示一个进度条，以说明完成的百分比。';
$string['progressbarteacherwarning'] = '{$a}不显示进度条';
$string['progressbarteacherwarning2'] = '因为您可以编辑此程序教学，所以您看不到进度条';
$string['progresscompleted'] = '您已完成此程序教学的{$a}%';
$string['qtype'] = '页面类型';
$string['question'] = '题目';
$string['questionoption'] = '题目';
$string['questiontype'] = '题目类型';
$string['randombranch'] = '随机内容页';
$string['randompageinbranch'] = '内容页面中的随机题';
$string['rank'] = '等级';
$string['rawgrade'] = '原始成绩';
$string['receivedcredit'] = '获得的学分';
$string['redisplaypage'] = '重新显示此页';
$string['removeallgroupoverrides'] = '删除所有群组覆盖';
$string['removealluseroverrides'] = '删除所有用户覆盖';
$string['report'] = '报表';
$string['reports'] = '报表';
$string['response'] = '反馈';
$string['retakesallowed'] = '允许重试';
$string['retakesallowed_help'] = '如果启用，学生可以多次尝试此程序教学。';
$string['returnto'] = '返回到{$a}';
$string['returntocourse'] = '返回到课程';
$string['reverttodefaults'] = '恢复为课程默认设置';
$string['review'] = '回顾';
$string['reviewlesson'] = '回顾程序教学';
$string['reviewquestionback'] = '是的，我想再试一次';
$string['reviewquestioncontinue'] = '不，我只想继续下一题';
$string['sanitycheckfailed'] = '检查失败: 这次尝试将被删除';
$string['save'] = '保存';
$string['savechanges'] = '保存更改';
$string['savechangesandeol'] = '保存所有修改并跳转到程序教学的最后。';
$string['saveoverrideandstay'] = '保存并输入另一个覆盖';
$string['savepage'] = '保存页面';
$string['score'] = '分数';
$string['score_help'] = '得分只在启用自定义得分时使用。每个答案都可以给出一个分数值(正或负)。';
$string['scores'] = '分数';
$string['search:activity'] = '程序教学-活动信息';
$string['secondpluswrong'] = '不完全正确，您想再试一次吗？';
$string['selectallattempts'] = '选择所有尝试';
$string['selectaqtype'] = '选择一个题目类型';
$string['sent'] = '发送';
$string['shortanswer'] = '填空题';
$string['showanunansweredpage'] = '显示一个未回答的页面';
$string['showanunseenpage'] = '显示一个未浏览的页面';
$string['singleanswer'] = '一个答案';
$string['skip'] = '跳跃导航';
$string['slideshow'] = '幻灯片';
$string['slideshow_help'] = '如果启用，此程序教学将以固定宽和高的幻灯片的形式显示。';
$string['slideshowbgcolor'] = '幻灯片背景';
$string['slideshowheight'] = '幻灯片高度';
$string['slideshowwidth'] = '幻灯片宽度';
$string['startlesson'] = '开始练习';
$string['studentattemptlesson'] = '{$a->firstname {$a->lastname}}的尝试次数{$a->attempt}';
$string['studentname'] = '{$a} 名称';
$string['studentoneminwarning'] = '警告：您还有不到1分钟来完成此练习';
$string['studentoutoftimeforreview'] = '注意：您没有时间复习本课了';
$string['studentresponse'] = '{$a} 的回应';
$string['submit'] = '提交';
$string['submitname'] = '提交名称';
$string['teacherjumpwarning'] = '此程序教学使用{$a->cluster}跳转或{$a->unseen}跳转。将使用“下一页”跳转模式替代。请以学生身份登录来测试这些跳转。';
$string['teacherongoingwarning'] = '即时分数只显示给学生。请以学生身份登录测试即时分数。';
$string['teachertimerwarning'] = '只有学生可以使用计时器。要测试计时器，请以学生身份登录。';
$string['thatsthecorrectanswer'] = '这是正确答案';
$string['thatsthewronganswer'] = '这是错误答案';
$string['thefollowingpagesjumptothispage'] = '从下页面跳转到此页面';
$string['thispage'] = '本页';
$string['timeisup'] = '时间到了';
$string['timelimit'] = '时间限制';
$string['timelimit_help'] = '如果启用了，就会在活动开始时显示一个关于时间限制的警告，并显示一个倒计时计时器。超过时间限制后给出的答案都不会计分。';
$string['timelimitwarning'] = '你必须{$a}完成这堂课。';
$string['timeremaining'] = '剩余时间';
$string['timespenterror'] = '在本程序教学中至少花费了{$a}分钟';
$string['timespentminutes'] = '消耗时间（分钟）';
$string['timetaken'] = '所用时间';
$string['totalpagesviewedheader'] = '页面浏览的数量';
$string['true'] = '对';
$string['truefalse'] = '判断题';
$string['unabledtosavefile'] = '无法保存您上传的文件';
$string['unknownqtypesnotimported'] = '{$a}个题目没有导入，因为不支持的它们的题目类型';
$string['unseenpageinbranch'] = '内容页中隐藏的题目';
$string['unsupportedqtype'] = '无效的提问形式({$a})!';
$string['updatedpage'] = '更新页面';
$string['updatefailed'] = '更新失败';
$string['updatepagenamed'] = '更新页面: {$a}';
$string['usemaximum'] = '最高分';
$string['usemean'] = '平均分';
$string['usepassword'] = '有密码保护的程序教学';
$string['usepassword_help'] = '如果启用，不知道密码就不能访问此程序教学。';
$string['useroverrides'] = '用户覆盖';
$string['useroverridesdeleted'] = '删除的用户覆盖';
$string['usersnone'] = '没有学生进入该程序教学';
$string['viewessayanswers'] = '查看文章答案';
$string['viewgrades'] = '查看成绩';
$string['viewreports'] = '查看{$a->attempts}完成{$a->student}尝试';
$string['viewreports2'] = '查看{$a}个已完成的试答';
$string['warning'] = '警告';
$string['welldone'] = '非常好！';
$string['whatdofirst'] = '您希望先做什么?';
$string['withselectedattempts'] = '通过选定的尝试。。。';
$string['wronganswerjump'] = '回答错误跳转到';
$string['wronganswerscore'] = '回答错误得分';
$string['wrongresponse'] = '给错误答案的回应';
$string['xattempts'] = '{$a}尝试';
$string['youhaveseen'] = '您已经看过本程序教学多个页面。<br />您要从上次看过的页面开始吗？';
$string['youranswer'] = '您的回答';
$string['yourcurrentgradeis'] = '您当前的分数是{$a}';
$string['yourcurrentgradeisoutof'] = '您目前的成绩是{$a->grade}/{$a->total}';
$string['youshouldview'] = '您至少要回答：{$a}';
