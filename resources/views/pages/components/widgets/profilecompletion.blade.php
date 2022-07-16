
                <!-- WIDGET BOX -->
                <div class="widget-box">
                    <!-- PROGRESS ARC SUMMARY -->
                    <div class="progress-arc-summary">
                        <!-- PROGRESS ARC WRAP -->
                        <div class="progress-arc-wrap">
                            <!-- PROGRESS ARC -->
                            <div class="progress-arc">
                                <canvas id="profile-completion-chart" data-percentage="80"></canvas>
                            </div>
                            <!-- PROGRESS ARC -->

                            <!-- PROGRESS ARC INFO -->
                            <div class="progress-arc-info">
                                <!-- PROGRESS ARC TITLE -->
                                <p class="progress-arc-title">80%</p>
                                <!-- /PROGRESS ARC TITLE -->
                            </div>
                            <!-- /PROGRESS ARC INFO -->
                        </div>
                        <!-- /PROGRESS ARC WRAP -->

                        <!-- PROGRESS ARC SUMMARY INFO -->
                        <div class="progress-arc-summary-info">
                            <!-- PROGRESS ARC SUMMARY TITLE -->
                            <p class="progress-arc-summary-title">Profile Completion</p>
                            <!-- /PROGRESS ARC SUMMARY TITLE -->

                            <!-- PROGRESS ARC SUMMARY TITLE -->
                            <p class="progress-arc-summary-subtitle">{{ '@' . Auth::user()->username }}</p>
                            <!-- /PROGRESS ARC SUMMARY TITLE -->

                            {{-- <!-- PROGRESS ARC SUMMARY TITLE -->
                            <p class="progress-arc-summary-text">Complete your profile by filling profile info fields.</p>
                            <!-- /PROGRESS ARC SUMMARY TITLE --> --}}
                        </div>
                        <!-- /PROGRESS ARC SUMMARY INFO -->
                    </div>
                    <!-- /PROGRESS ARC SUMMARY -->

                    {{-- Button for Profile Completion --}}
                    <div>

                        <a href="/profile" class="button primary w-100 mt-3">Complete Your Profile</a>
                    </div>

                    {{-- <!-- ACHIEVEMENT STATUS LIST -->
                    <div class="achievement-status-list">
                        <!-- ACHIEVEMENT STATUS -->
                        <div class="achievement-status">
                            <!-- ACHIEVEMENT STATUS PROGRESS -->
                            <p class="achievement-status-progress">11/30</p>
                            <!-- /ACHIEVEMENT STATUS PROGRESS -->

                            <!-- ACHIEVEMENT STATUS INFO -->
                            <div class="achievement-status-info">
                                <!-- ACHIEVEMENT STATUS TITLE -->
                                <p class="achievement-status-title">Quests</p>
                                <!-- /ACHIEVEMENT STATUS TITLE -->

                                <!-- ACHIEVEMENT STATUS TEXT -->
                                <p class="achievement-status-text">Completed</p>
                                <!-- /ACHIEVEMENT STATUS TEXT -->
                            </div>
                            <!-- /ACHIEVEMENT STATUS INFO -->

                            <!-- ACHIEVEMENT STATUS IMAGE -->
                            <img class="achievement-status-image" src="/assets/vikinger/img/badge/completedq-s.png"
                                alt="bdage-completedq-s">
                            <!-- /ACHIEVEMENT STATUS IMAGE -->
                        </div>
                        <!-- /ACHIEVEMENT STATUS -->

                        <!-- ACHIEVEMENT STATUS -->
                        <div class="achievement-status">
                            <!-- ACHIEVEMENT STATUS PROGRESS -->
                            <p class="achievement-status-progress">22/46</p>
                            <!-- /ACHIEVEMENT STATUS PROGRESS -->

                            <!-- ACHIEVEMENT STATUS INFO -->
                            <div class="achievement-status-info">
                                <!-- ACHIEVEMENT STATUS TITLE -->
                                <p class="achievement-status-title">Badges</p>
                                <!-- /ACHIEVEMENT STATUS TITLE -->

                                <!-- ACHIEVEMENT STATUS TEXT -->
                                <p class="achievement-status-text">Unlocked</p>
                                <!-- /ACHIEVEMENT STATUS TEXT -->
                            </div>
                            <!-- /ACHIEVEMENT STATUS INFO -->

                            <!-- ACHIEVEMENT STATUS IMAGE -->
                            <img class="achievement-status-image" src="/assets/vikinger/img/badge/unlocked-badge.png"
                                alt="bdage-unlocked-badge">
                            <!-- /ACHIEVEMENT STATUS IMAGE -->
                        </div>
                        <!-- /ACHIEVEMENT STATUS -->
                    </div>
                    <!-- /ACHIEVEMENT STATUS LIST --> --}}
                </div>
                <!-- /WIDGET BOX -->