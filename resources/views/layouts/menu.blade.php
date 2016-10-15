<li class="{{ Request::is('applogs*') ? 'active' : '' }}">
    <a href="{!! route('core.applogs.index') !!}"><i class="fa fa-edit"></i><span>Applogs</span></a>
</li>

<li class="{{ Request::is('attachmentChunks*') ? 'active' : '' }}">
    <a href="{!! route('core.attachmentChunks.index') !!}"><i class="fa fa-edit"></i><span>AttachmentChunks</span></a>
</li>

<li class="{{ Request::is('attachments*') ? 'active' : '' }}">
    <a href="{!! route('core.attachments.index') !!}"><i class="fa fa-edit"></i><span>Attachments</span></a>
</li>

<li class="{{ Request::is('autocloseCriterias*') ? 'active' : '' }}">
    <a href="{!! route('core.autocloseCriterias.index') !!}"><i class="fa fa-edit"></i><span>AutocloseCriterias</span></a>
</li>

<li class="{{ Request::is('autocloseRules*') ? 'active' : '' }}">
    <a href="{!! route('core.autocloseRules.index') !!}"><i class="fa fa-edit"></i><span>AutocloseRules</span></a>
</li>

<li class="{{ Request::is('bayesCategories*') ? 'active' : '' }}">
    <a href="{!! route('core.bayesCategories.index') !!}"><i class="fa fa-edit"></i><span>BayesCategories</span></a>
</li>

<li class="{{ Request::is('breakLines*') ? 'active' : '' }}">
    <a href="{!! route('core.breakLines.index') !!}"><i class="fa fa-edit"></i><span>BreakLines</span></a>
</li>

<li class="{{ Request::is('catchAllRules*') ? 'active' : '' }}">
    <a href="{!! route('core.catchAllRules.index') !!}"><i class="fa fa-edit"></i><span>CatchAllRules</span></a>
</li>

<li class="{{ Request::is('comments*') ? 'active' : '' }}">
    <a href="{!! route('core.comments.index') !!}"><i class="fa fa-edit"></i><span>Comments</span></a>
</li>

<li class="{{ Request::is('crons*') ? 'active' : '' }}">
    <a href="{!! route('core.crons.index') !!}"><i class="fa fa-edit"></i><span>Crons</span></a>
</li>

<li class="{{ Request::is('cronLogs*') ? 'active' : '' }}">
    <a href="{!! route('core.cronLogs.index') !!}"><i class="fa fa-edit"></i><span>CronLogs</span></a>
</li>

<li class="{{ Request::is('departments*') ? 'active' : '' }}">
    <a href="{!! route('core.departments.index') !!}"><i class="fa fa-edit"></i><span>Departments</span></a>
</li>

<li class="{{ Request::is('emailQueues*') ? 'active' : '' }}">
    <a href="{!! route('core.emailQueues.index') !!}"><i class="fa fa-edit"></i><span>EmailQueues</span></a>
</li>

<li class="{{ Request::is('errorLogs*') ? 'active' : '' }}">
    <a href="{!! route('core.errorLogs.index') !!}"><i class="fa fa-edit"></i><span>ErrorLogs</span></a>
</li>

<li class="{{ Request::is('escalationNotifications*') ? 'active' : '' }}">
    <a href="{!! route('core.escalationNotifications.index') !!}"><i class="fa fa-edit"></i><span>EscalationNotifications</span></a>
</li>

<li class="{{ Request::is('files*') ? 'active' : '' }}">
    <a href="{!! route('core.files.index') !!}"><i class="fa fa-edit"></i><span>Files</span></a>
</li>

<li class="{{ Request::is('jobQueueMessageLogs*') ? 'active' : '' }}">
    <a href="{!! route('core.jobQueueMessageLogs.index') !!}"><i class="fa fa-edit"></i><span>JobQueueMessageLogs</span></a>
</li>

<li class="{{ Request::is('jobQueueMessagePackets*') ? 'active' : '' }}">
    <a href="{!! route('core.jobQueueMessagePackets.index') !!}"><i class="fa fa-edit"></i><span>JobQueueMessagePackets</span></a>
</li>

<li class="{{ Request::is('jobQueueMessages*') ? 'active' : '' }}">
    <a href="{!! route('core.jobQueueMessages.index') !!}"><i class="fa fa-edit"></i><span>JobQueueMessages</span></a>
</li>

<li class="{{ Request::is('kbArticleLinks*') ? 'active' : '' }}">
    <a href="{!! route('core.kbArticleLinks.index') !!}"><i class="fa fa-edit"></i><span>KbArticleLinks</span></a>
</li>

<li class="{{ Request::is('kbArticles*') ? 'active' : '' }}">
    <a href="{!! route('core.kbArticles.index') !!}"><i class="fa fa-edit"></i><span>KbArticles</span></a>
</li>

<li class="{{ Request::is('kbCategories*') ? 'active' : '' }}">
    <a href="{!! route('core.kbCategories.index') !!}"><i class="fa fa-edit"></i><span>KbCategories</span></a>
</li>

<li class="{{ Request::is('macroCategories*') ? 'active' : '' }}">
    <a href="{!! route('core.macroCategories.index') !!}"><i class="fa fa-edit"></i><span>MacroCategories</span></a>
</li>

<li class="{{ Request::is('macroReplies*') ? 'active' : '' }}">
    <a href="{!! route('core.macroReplies.index') !!}"><i class="fa fa-edit"></i><span>MacroReplies</span></a>
</li>

<li class="{{ Request::is('macroReplyDatas*') ? 'active' : '' }}">
    <a href="{!! route('core.macroReplyDatas.index') !!}"><i class="fa fa-edit"></i><span>MacroReplyDatas</span></a>
</li>

<li class="{{ Request::is('mailQueueDatas*') ? 'active' : '' }}">
    <a href="{!! route('core.mailQueueDatas.index') !!}"><i class="fa fa-edit"></i><span>MailQueueDatas</span></a>
</li>

<li class="{{ Request::is('notificationActions*') ? 'active' : '' }}">
    <a href="{!! route('core.notificationActions.index') !!}"><i class="fa fa-edit"></i><span>NotificationActions</span></a>
</li>

<li class="{{ Request::is('notificationCriterias*') ? 'active' : '' }}">
    <a href="{!! route('core.notificationCriterias.index') !!}"><i class="fa fa-edit"></i><span>NotificationCriterias</span></a>
</li>

<li class="{{ Request::is('notificationPools*') ? 'active' : '' }}">
    <a href="{!! route('core.notificationPools.index') !!}"><i class="fa fa-edit"></i><span>NotificationPools</span></a>
</li>

<li class="{{ Request::is('notificationRules*') ? 'active' : '' }}">
    <a href="{!! route('core.notificationRules.index') !!}"><i class="fa fa-edit"></i><span>NotificationRules</span></a>
</li>

<li class="{{ Request::is('onsiteSessions*') ? 'active' : '' }}">
    <a href="{!! route('core.onsiteSessions.index') !!}"><i class="fa fa-edit"></i><span>OnsiteSessions</span></a>
</li>

<li class="{{ Request::is('parserBans*') ? 'active' : '' }}">
    <a href="{!! route('core.parserBans.index') !!}"><i class="fa fa-edit"></i><span>ParserBans</span></a>
</li>

<li class="{{ Request::is('parserLogs*') ? 'active' : '' }}">
    <a href="{!! route('core.parserLogs.index') !!}"><i class="fa fa-edit"></i><span>ParserLogs</span></a>
</li>

<li class="{{ Request::is('parserLoopRules*') ? 'active' : '' }}">
    <a href="{!! route('core.parserLoopRules.index') !!}"><i class="fa fa-edit"></i><span>ParserLoopRules</span></a>
</li>

<li class="{{ Request::is('parserRuleActions*') ? 'active' : '' }}">
    <a href="{!! route('core.parserRuleActions.index') !!}"><i class="fa fa-edit"></i><span>ParserRuleActions</span></a>
</li>

<li class="{{ Request::is('parserRuleCriterias*') ? 'active' : '' }}">
    <a href="{!! route('core.parserRuleCriterias.index') !!}"><i class="fa fa-edit"></i><span>ParserRuleCriterias</span></a>
</li>

<li class="{{ Request::is('parserRules*') ? 'active' : '' }}">
    <a href="{!! route('core.parserRules.index') !!}"><i class="fa fa-edit"></i><span>ParserRules</span></a>
</li>

<li class="{{ Request::is('queueSignatures*') ? 'active' : '' }}">
    <a href="{!! route('core.queueSignatures.index') !!}"><i class="fa fa-edit"></i><span>QueueSignatures</span></a>
</li>

<li class="{{ Request::is('settings*') ? 'active' : '' }}">
    <a href="{!! route('core.settings.index') !!}"><i class="fa fa-edit"></i><span>Settings</span></a>
</li>

<li class="{{ Request::is('settingsFields*') ? 'active' : '' }}">
    <a href="{!! route('core.settingsFields.index') !!}"><i class="fa fa-edit"></i><span>SettingsFields</span></a>
</li>

<li class="{{ Request::is('settingsGroups*') ? 'active' : '' }}">
    <a href="{!! route('core.settingsGroups.index') !!}"><i class="fa fa-edit"></i><span>SettingsGroups</span></a>
</li>

<li class="{{ Request::is('signatures*') ? 'active' : '' }}">
    <a href="{!! route('core.signatures.index') !!}"><i class="fa fa-edit"></i><span>Signatures</span></a>
</li>

<li class="{{ Request::is('slaHolidays*') ? 'active' : '' }}">
    <a href="{!! route('core.slaHolidays.index') !!}"><i class="fa fa-edit"></i><span>SlaHolidays</span></a>
</li>

<li class="{{ Request::is('slaPlans*') ? 'active' : '' }}">
    <a href="{!! route('core.slaPlans.index') !!}"><i class="fa fa-edit"></i><span>SlaPlans</span></a>
</li>

<li class="{{ Request::is('slaRuleCriterias*') ? 'active' : '' }}">
    <a href="{!! route('core.slaRuleCriterias.index') !!}"><i class="fa fa-edit"></i><span>SlaRuleCriterias</span></a>
</li>

<li class="{{ Request::is('slaSchedules*') ? 'active' : '' }}">
    <a href="{!! route('core.slaSchedules.index') !!}"><i class="fa fa-edit"></i><span>SlaSchedules</span></a>
</li>

<li class="{{ Request::is('slaScheduleTables*') ? 'active' : '' }}">
    <a href="{!! route('core.slaScheduleTables.index') !!}"><i class="fa fa-edit"></i><span>SlaScheduleTables</span></a>
</li>

<li class="{{ Request::is('staff*') ? 'active' : '' }}">
    <a href="{!! route('core.staff.index') !!}"><i class="fa fa-edit"></i><span>Staff</span></a>
</li>

<li class="{{ Request::is('staffActivityLogs*') ? 'active' : '' }}">
    <a href="{!! route('core.staffActivityLogs.index') !!}"><i class="fa fa-edit"></i><span>StaffActivityLogs</span></a>
</li>

<li class="{{ Request::is('staffTeamLinks*') ? 'active' : '' }}">
    <a href="{!! route('core.staffTeamLinks.index') !!}"><i class="fa fa-edit"></i><span>StaffTeamLinks</span></a>
</li>

<li class="{{ Request::is('staffTeamSettings*') ? 'active' : '' }}">
    <a href="{!! route('core.staffTeamSettings.index') !!}"><i class="fa fa-edit"></i><span>StaffTeamSettings</span></a>
</li>

<li class="{{ Request::is('staffLogInlogs*') ? 'active' : '' }}">
    <a href="{!! route('core.staffLogInlogs.index') !!}"><i class="fa fa-edit"></i><span>StaffLogInlogs</span></a>
</li>

<li class="{{ Request::is('staffProfileImages*') ? 'active' : '' }}">
    <a href="{!! route('core.staffProfileImages.index') !!}"><i class="fa fa-edit"></i><span>StaffProfileImages</span></a>
</li>

<li class="{{ Request::is('staffProperties*') ? 'active' : '' }}">
    <a href="{!! route('core.staffProperties.index') !!}"><i class="fa fa-edit"></i><span>StaffProperties</span></a>
</li>

<li class="{{ Request::is('staffSettings*') ? 'active' : '' }}">
    <a href="{!! route('core.staffSettings.index') !!}"><i class="fa fa-edit"></i><span>StaffSettings</span></a>
</li>

<li class="{{ Request::is('tagLinks*') ? 'active' : '' }}">
    <a href="{!! route('core.tagLinks.index') !!}"><i class="fa fa-edit"></i><span>TagLinks</span></a>
</li>

<li class="{{ Request::is('tags*') ? 'active' : '' }}">
    <a href="{!! route('core.tags.index') !!}"><i class="fa fa-edit"></i><span>Tags</span></a>
</li>

<li class="{{ Request::is('templateCategories*') ? 'active' : '' }}">
    <a href="{!! route('core.templateCategories.index') !!}"><i class="fa fa-edit"></i><span>TemplateCategories</span></a>
</li>

<li class="{{ Request::is('templateDatas*') ? 'active' : '' }}">
    <a href="{!! route('core.templateDatas.index') !!}"><i class="fa fa-edit"></i><span>TemplateDatas</span></a>
</li>

<li class="{{ Request::is('templateGroups*') ? 'active' : '' }}">
    <a href="{!! route('core.templateGroups.index') !!}"><i class="fa fa-edit"></i><span>TemplateGroups</span></a>
</li>

<li class="{{ Request::is('templates*') ? 'active' : '' }}">
    <a href="{!! route('core.templates.index') !!}"><i class="fa fa-edit"></i><span>Templates</span></a>
</li>

<li class="{{ Request::is('ticketFileTypes*') ? 'active' : '' }}">
    <a href="{!! route('core.ticketFileTypes.index') !!}"><i class="fa fa-edit"></i><span>TicketFileTypes</span></a>
</li>

<li class="{{ Request::is('ticketFollowups*') ? 'active' : '' }}">
    <a href="{!! route('core.ticketFollowups.index') !!}"><i class="fa fa-edit"></i><span>TicketFollowups</span></a>
</li>

<li class="{{ Request::is('ticketLinkChains*') ? 'active' : '' }}">
    <a href="{!! route('core.ticketLinkChains.index') !!}"><i class="fa fa-edit"></i><span>TicketLinkChains</span></a>
</li>

<li class="{{ Request::is('ticketLinkedTables*') ? 'active' : '' }}">
    <a href="{!! route('core.ticketLinkedTables.index') !!}"><i class="fa fa-edit"></i><span>TicketLinkedTables</span></a>
</li>

<li class="{{ Request::is('ticketLinkTypes*') ? 'active' : '' }}">
    <a href="{!! route('core.ticketLinkTypes.index') !!}"><i class="fa fa-edit"></i><span>TicketLinkTypes</span></a>
</li>

<li class="{{ Request::is('ticketMergelogs*') ? 'active' : '' }}">
    <a href="{!! route('core.ticketMergelogs.index') !!}"><i class="fa fa-edit"></i><span>TicketMergelogs</span></a>
</li>

<li class="{{ Request::is('ticketMessageIds*') ? 'active' : '' }}">
    <a href="{!! route('core.ticketMessageIds.index') !!}"><i class="fa fa-edit"></i><span>TicketMessageIds</span></a>
</li>

<li class="{{ Request::is('ticketNotes*') ? 'active' : '' }}">
    <a href="{!! route('core.ticketNotes.index') !!}"><i class="fa fa-edit"></i><span>TicketNotes</span></a>
</li>

<li class="{{ Request::is('ticketPriorities*') ? 'active' : '' }}">
    <a href="{!! route('core.ticketPriorities.index') !!}"><i class="fa fa-edit"></i><span>TicketPriorities</span></a>
</li>

<li class="{{ Request::is('ticketRecurrences*') ? 'active' : '' }}">
    <a href="{!! route('core.ticketRecurrences.index') !!}"><i class="fa fa-edit"></i><span>TicketRecurrences</span></a>
</li>

<li class="{{ Request::is('tickets*') ? 'active' : '' }}">
    <a href="{!! route('core.tickets.index') !!}"><i class="fa fa-edit"></i><span>Tickets</span></a>
</li>

<li class="{{ Request::is('ticketStatuses*') ? 'active' : '' }}">
    <a href="{!! route('core.ticketStatuses.index') !!}"><i class="fa fa-edit"></i><span>TicketStatuses</span></a>
</li>

<li class="{{ Request::is('ticketTimeTracks*') ? 'active' : '' }}">
    <a href="{!! route('core.ticketTimeTracks.index') !!}"><i class="fa fa-edit"></i><span>TicketTimeTracks</span></a>
</li>

<li class="{{ Request::is('ticketTypes*') ? 'active' : '' }}">
    <a href="{!! route('core.ticketTypes.index') !!}"><i class="fa fa-edit"></i><span>TicketTypes</span></a>
</li>

<li class="{{ Request::is('ticketWorkflowActions*') ? 'active' : '' }}">
    <a href="{!! route('core.ticketWorkflowActions.index') !!}"><i class="fa fa-edit"></i><span>TicketWorkflowActions</span></a>
</li>

<li class="{{ Request::is('ticketWorkflowCriterias*') ? 'active' : '' }}">
    <a href="{!! route('core.ticketWorkflowCriterias.index') !!}"><i class="fa fa-edit"></i><span>TicketWorkflowCriterias</span></a>
</li>

<li class="{{ Request::is('ticketWorkflowNotifications*') ? 'active' : '' }}">
    <a href="{!! route('core.ticketWorkflowNotifications.index') !!}"><i class="fa fa-edit"></i><span>TicketWorkflowNotifications</span></a>
</li>

<li class="{{ Request::is('ticketWorkflows*') ? 'active' : '' }}">
    <a href="{!! route('core.ticketWorkflows.index') !!}"><i class="fa fa-edit"></i><span>TicketWorkflows</span></a>
</li>

<li class="{{ Request::is('troubleshooterCategories*') ? 'active' : '' }}">
    <a href="{!! route('core.troubleshooterCategories.index') !!}"><i class="fa fa-edit"></i><span>TroubleshooterCategories</span></a>
</li>

<li class="{{ Request::is('troubleshooterLinks*') ? 'active' : '' }}">
    <a href="{!! route('core.troubleshooterLinks.index') !!}"><i class="fa fa-edit"></i><span>TroubleshooterLinks</span></a>
</li>

<li class="{{ Request::is('troubleshooterSteps*') ? 'active' : '' }}">
    <a href="{!! route('core.troubleshooterSteps.index') !!}"><i class="fa fa-edit"></i><span>TroubleshooterSteps</span></a>
</li>

<li class="{{ Request::is('userGroupAssigns*') ? 'active' : '' }}">
    <a href="{!! route('core.userGroupAssigns.index') !!}"><i class="fa fa-edit"></i><span>UserGroupAssigns</span></a>
</li>

<li class="{{ Request::is('userGroups*') ? 'active' : '' }}">
    <a href="{!! route('core.userGroups.index') !!}"><i class="fa fa-edit"></i><span>UserGroups</span></a>
</li>

<li class="{{ Request::is('userGroupSettings*') ? 'active' : '' }}">
    <a href="{!! route('core.userGroupSettings.index') !!}"><i class="fa fa-edit"></i><span>UserGroupSettings</span></a>
</li>

<li class="{{ Request::is('userLogInlogs*') ? 'active' : '' }}">
    <a href="{!! route('core.userLogInlogs.index') !!}"><i class="fa fa-edit"></i><span>UserLogInlogs</span></a>
</li>

<li class="{{ Request::is('userNotes*') ? 'active' : '' }}">
    <a href="{!! route('core.userNotes.index') !!}"><i class="fa fa-edit"></i><span>UserNotes</span></a>
</li>

<li class="{{ Request::is('userProfileImages*') ? 'active' : '' }}">
    <a href="{!! route('core.userProfileImages.index') !!}"><i class="fa fa-edit"></i><span>UserProfileImages</span></a>
</li>

<li class="{{ Request::is('userProperties*') ? 'active' : '' }}">
    <a href="{!! route('core.userProperties.index') !!}"><i class="fa fa-edit"></i><span>UserProperties</span></a>
</li>

<li class="{{ Request::is('users*') ? 'active' : '' }}">
    <a href="{!! route('core.users.index') !!}"><i class="fa fa-edit"></i><span>Users</span></a>
</li>

<li class="{{ Request::is('userSettings*') ? 'active' : '' }}">
    <a href="{!! route('core.userSettings.index') !!}"><i class="fa fa-edit"></i><span>UserSettings</span></a>
</li>

