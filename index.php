<?php include './includes/config.php' ?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="styles.css" />
	<title>ToDo App</title>
</head>

<body>
	<nav id="nav" data-state="closed">
		<div class="nav__wrapper">
			<div class="name__display">
				<div class="user">
					<svg width="18" height="18" fill="none" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
						<g id="SVGRepo_bgCarrier" stroke-width="0"></g>
						<g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
						<g id="SVGRepo_iconCarrier">
							<path opacity="0.3"
								d="M17 8C17 10.7614 14.7614 13 12 13C9.23858 13 7 10.7614 7 8C7 5.23858 9.23858 3 12 3C14.7614 3 17 5.23858 17 8Z"
								fill="rgb(var(--primary))"></path>
							<path
								d="M17 8C17 10.7614 14.7614 13 12 13C9.23858 13 7 10.7614 7 8C7 5.23858 9.23858 3 12 3C14.7614 3 17 5.23858 17 8Z"
								stroke="rgb(var(--primary))" stroke-width="2"></path>
							<path d="M3 21C3.95728 17.9237 6.41998 17 12 17C17.58 17 20.0427 17.9237 21 21"
								stroke="rgb(var(--primary))" stroke-width="2" stroke-linecap="round"></path>
						</g>
					</svg>

					<?php
					$sql = "SELECT fullname FROM users WHERE email='joeboywizz@gmail.com'";
					$result = $conn->query($sql);

					if ($result->num_rows > 0) {
						$row = $result->fetch_assoc();

						echo '<h1>' . $row ? 'User' : $row['fullname'] . 'Space</h1>';
					}
					?>
				</div>

				<button onclick="closeMenu()">
					<svg width="16" height="16" version="1.1" fill="#000000" viewBox="0 -0.5 21 21"
						xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
						<g id="SVGRepo_bgCarrier" stroke-width="0"></g>
						<g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
						<g id="SVGRepo_iconCarrier">
							<title>menu_navigation_grid [#1528]</title>
							<desc>Created with Sketch.</desc>
							<defs></defs>
							<g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
								<g id="Dribbble-Light-Preview" transform="translate(-139.000000, -200.000000)"
									fill="rgb(var(--primary))">
									<g id="icons" transform="translate(56.000000, 160.000000)">
										<path style="stroke: none !important"
											d="M101.9,57.009 C101.9,57.56 101.38235,58 100.80275,58 L97.65275,58 C97.0742,58 96.65,57.56 96.65,57.009 L96.65,54.009 C96.65,53.458 97.0742,53 97.65275,53 L100.80275,53 C101.38235,53 101.9,53.458 101.9,54.009 L101.9,57.009 Z M100.80275,51 L97.65275,51 C95.9129,51 94.55,52.352 94.55,54.009 L94.55,57.009 C94.55,58.666 95.9129,60 97.65275,60 L100.80275,60 C102.5426,60 104,58.666 104,57.009 L104,54.009 C104,52.352 102.5426,51 100.80275,51 L100.80275,51 Z M90.35,57.009 C90.35,57.56 89.83235,58 89.25275,58 L86.10275,58 C85.5242,58 85.1,57.56 85.1,57.009 L85.1,54.009 C85.1,53.458 85.5242,53 86.10275,53 L89.25275,53 C89.83235,53 90.35,53.458 90.35,54.009 L90.35,57.009 Z M89.25275,51 L86.10275,51 C84.3629,51 83,52.352 83,54.009 L83,57.009 C83,58.666 84.3629,60 86.10275,60 L89.25275,60 C90.9926,60 92.45,58.666 92.45,57.009 L92.45,54.009 C92.45,52.352 90.9926,51 89.25275,51 L89.25275,51 Z M101.9,46.009 C101.9,46.56 101.38235,47 100.80275,47 L97.65275,47 C97.0742,47 96.65,46.56 96.65,46.009 L96.65,43.009 C96.65,42.458 97.0742,42 97.65275,42 L100.80275,42 C101.38235,42 101.9,42.458 101.9,43.009 L101.9,46.009 Z M100.80275,40 L97.65275,40 C95.9129,40 94.55,41.352 94.55,43.009 L94.55,46.009 C94.55,47.666 95.9129,49 97.65275,49 L100.80275,49 C102.5426,49 104,47.666 104,46.009 L104,43.009 C104,41.352 102.5426,40 100.80275,40 L100.80275,40 Z M90.35,46.009 C90.35,46.56 89.83235,47 89.25275,47 L86.10275,47 C85.5242,47 85.1,46.56 85.1,46.009 L85.1,43.009 C85.1,42.458 85.5242,42 86.10275,42 L89.25275,42 C89.83235,42 90.35,42.458 90.35,43.009 L90.35,46.009 Z M89.25275,40 L86.10275,40 C84.3629,40 83,41.352 83,43.009 L83,46.009 C83,47.666 84.3629,49 86.10275,49 L89.25275,49 C90.9926,49 92.45,47.666 92.45,46.009 L92.45,43.009 C92.45,41.352 90.9926,40 89.25275,40 L89.25275,40 Z"
											id="menu_navigation_grid-[#1528]"></path>
									</g>
								</g>
							</g>
						</g>
					</svg>
				</button>
			</div>

			<div class="general__tabs tabs">
				<h2>General</h2>

				<ul class="tabs__wrapper">
					<li data-state="active">
						<button class="tab">
							<svg stroke-width="0" viewBox="0 0 24 24" fill="rgb(var(--dark-gray))" xmlns="http://www.w3.org/2000/svg">
								<g id="SVGRepo_bgCarrier" stroke-width="0"></g>
								<g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
								<g id="SVGRepo_iconCarrier">
									<path fill-rule="evenodd"
										d="M21,20 C21.5522847,20 22,20.4477153 22,21 C22,21.5522847 21.5522847,22 21,22 L3,22 C2.44771525,22 2,21.5522847 2,21 C2,20.4477153 2.44771525,20 3,20 L21,20 Z M19,6 C20.6568542,6 22,7.34314575 22,9 L22,15 C22,16.6568542 20.6568542,18 19,18 L5,18 C3.34314575,18 2,16.6568542 2,15 L2,9 C2,7.34314575 3.34314575,6 5,6 L19,6 Z M19,8 L5,8 C4.44771525,8 4,8.44771525 4,9 L4,15 C4,15.5522847 4.44771525,16 5,16 L19,16 C19.5522847,16 20,15.5522847 20,15 L20,9 C20,8.44771525 19.5522847,8 19,8 Z M21,2 C21.5522847,2 22,2.44771525 22,3 C22,3.55228475 21.5522847,4 21,4 L3,4 C2.44771525,4 2,3.55228475 2,3 C2,2.44771525 2.44771525,2 3,2 L21,2 Z">
									</path>
								</g>
							</svg>

							<span>Todo</span>
						</button>
					</li>

					<li data-state="">
						<button class="tab">
							<svg fill="none" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
								<g id="SVGRepo_bgCarrier" stroke-width="0"></g>
								<g stroke-linecap="round" stroke-linejoin="round" id="SVGRepo_tracerCarrier"></g>
								<g id="SVGRepo_iconCarrier">
									<path stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke="rgb(var(--dark-gray))"
										d="M4 14H6.67452C7.1637 14 7.40829 14 7.63846 14.0553C7.84254 14.1043 8.03763 14.1851 8.21657 14.2947C8.4184 14.4184 8.59136 14.5914 8.93726 14.9373L9.06274 15.0627C9.40865 15.4086 9.5816 15.5816 9.78343 15.7053C9.96237 15.8149 10.1575 15.8957 10.3615 15.9447C10.5917 16 10.8363 16 11.3255 16H12.6745C13.1637 16 13.4083 16 13.6385 15.9447C13.8425 15.8957 14.0376 15.8149 14.2166 15.7053C14.4184 15.5816 14.5914 15.4086 14.9373 15.0627L15.0627 14.9373C15.4086 14.5914 15.5816 14.4184 15.7834 14.2947C15.9624 14.1851 16.1575 14.1043 16.3615 14.0553C16.5917 14 16.8363 14 17.3255 14H20M7.2 4H16.8C17.9201 4 18.4802 4 18.908 4.21799C19.2843 4.40973 19.5903 4.71569 19.782 5.09202C20 5.51984 20 6.07989 20 7.2V16.8C20 17.9201 20 18.4802 19.782 18.908C19.5903 19.2843 19.2843 19.5903 18.908 19.782C18.4802 20 17.9201 20 16.8 20H7.2C6.0799 20 5.51984 20 5.09202 19.782C4.71569 19.5903 4.40973 19.2843 4.21799 18.908C4 18.4802 4 17.9201 4 16.8V7.2C4 6.0799 4 5.51984 4.21799 5.09202C4.40973 4.71569 4.71569 4.40973 5.09202 4.21799C5.51984 4 6.0799 4 7.2 4Z">
									</path>
								</g>
							</svg>

							<span>Inbox</span>
						</button>
					</li>

					<li data-state="">
						<button class="tab">
							<svg fill="none" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
								<g id="SVGRepo_bgCarrier" stroke-width="0"></g>
								<g stroke-linecap="round" stroke-linejoin="round" id="SVGRepo_tracerCarrier"></g>
								<g id="SVGRepo_iconCarrier">
									<path stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke="rgb(var(--dark-gray))"
										d="M3 9H21M7 3V5M17 3V5M6 13H8M6 17H8M11 13H13M11 17H13M16 13H18M16 17H18M6.2 21H17.8C18.9201 21 19.4802 21 19.908 20.782C20.2843 20.5903 20.5903 20.2843 20.782 19.908C21 19.4802 21 18.9201 21 17.8V8.2C21 7.07989 21 6.51984 20.782 6.09202C20.5903 5.71569 20.2843 5.40973 19.908 5.21799C19.4802 5 18.9201 5 17.8 5H6.2C5.0799 5 4.51984 5 4.09202 5.21799C3.71569 5.40973 3.40973 5.71569 3.21799 6.09202C3 6.51984 3 7.07989 3 8.2V17.8C3 18.9201 3 19.4802 3.21799 19.908C3.40973 20.2843 3.71569 20.5903 4.09202 20.782C4.51984 21 5.07989 21 6.2 21Z">
									</path>
								</g>
							</svg>

							<span>Calendar</span>
						</button>
					</li>

					<li data-state="">
						<button class="tab">
							<svg fill="none" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
								<g id="SVGRepo_bgCarrier" stroke-width="0"></g>
								<g stroke-linecap="round" stroke-linejoin="round" id="SVGRepo_tracerCarrier"></g>
								<g id="SVGRepo_iconCarrier">
									<path stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke="rgb(var(--dark-gray))"
										d="M18 6L17.1991 18.0129C17.129 19.065 17.0939 19.5911 16.8667 19.99C16.6666 20.3412 16.3648 20.6235 16.0011 20.7998C15.588 21 15.0607 21 14.0062 21H9.99377C8.93927 21 8.41202 21 7.99889 20.7998C7.63517 20.6235 7.33339 20.3412 7.13332 19.99C6.90607 19.5911 6.871 19.065 6.80086 18.0129L6 6M4 6H20M16 6L15.7294 5.18807C15.4671 4.40125 15.3359 4.00784 15.0927 3.71698C14.8779 3.46013 14.6021 3.26132 14.2905 3.13878C13.9376 3 13.523 3 12.6936 3H11.3064C10.477 3 10.0624 3 9.70951 3.13878C9.39792 3.26132 9.12208 3.46013 8.90729 3.71698C8.66405 4.00784 8.53292 4.40125 8.27064 5.18807L8 6M14 10V17M10 10V17">
									</path>
								</g>
							</svg>

							<span>Trash</span>
						</button>
					</li>
				</ul>
			</div>

			<div class="tasks_tabs tabs">
				<h2>Task Progress</h2>

				<ul class="tabs__wrapper tasks__wrapper">
					<li id="my-task" data-state="open">
						<button class="tab">
							<span>My Task</span>

							<div class="control__icon">
								<svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<g id="SVGRepo_bgCarrier" stroke-width="0"></g>
									<g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
									<g id="SVGRepo_iconCarrier">
										<path fill-rule="evenodd" clip-rule="evenodd"
											d="M11.2929 8.79289C11.6834 8.40237 12.3166 8.40237 12.7071 8.79289L17.7071 13.7929C18.0976 14.1834 18.0976 14.8166 17.7071 15.2071C17.3166 15.5976 16.6834 15.5976 16.2929 15.2071L12 10.9142L7.70711 15.2071C7.31658 15.5976 6.68342 15.5976 6.29289 15.2071C5.90237 14.8166 5.90237 14.1834 6.29289 13.7929L11.2929 8.79289Z"
											fill="rgb(var(--dark-gray))"></path>
									</g>
								</svg>

								<svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<g id="SVGRepo_bgCarrier" stroke-width="0"></g>
									<g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
									<g id="SVGRepo_iconCarrier">
										<path fill-rule="evenodd" clip-rule="evenodd"
											d="M6.29289 8.79289C6.68342 8.40237 7.31658 8.40237 7.70711 8.79289L12 13.0858L16.2929 8.79289C16.6834 8.40237 17.3166 8.40237 17.7071 8.79289C18.0976 9.18342 18.0976 9.81658 17.7071 10.2071L12.7071 15.2071C12.3166 15.5976 11.6834 15.5976 11.2929 15.2071L6.29289 10.2071C5.90237 9.81658 5.90237 9.18342 6.29289 8.79289Z"
											fill="rgb(var(--dark-gray))"></path>
									</g>
								</svg>
							</div>
						</button>

						<div>
							<ul class="tasks">
								<li class="task">
									<div style="--progress: 0">
										<div></div>
									</div>

									<span>Debugging</span>
								</li>
								<li class="task">
									<div style="--progress: 50">
										<div></div>
									</div>

									<span>Coding</span>
								</li>
								<li class="task">
									<div style="--progress: 100">
										<div></div>
									</div>

									<span>Design</span>
								</li>
							</ul>
						</div>
					</li>

					<li id="trip-plan" data-state="collapsed">
						<button class="tab">
							<span>Trip Plan</span>

							<div class="control__icon">
								<svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<g id="SVGRepo_bgCarrier" stroke-width="0"></g>
									<g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
									<g id="SVGRepo_iconCarrier">
										<path fill-rule="evenodd" clip-rule="evenodd"
											d="M11.2929 8.79289C11.6834 8.40237 12.3166 8.40237 12.7071 8.79289L17.7071 13.7929C18.0976 14.1834 18.0976 14.8166 17.7071 15.2071C17.3166 15.5976 16.6834 15.5976 16.2929 15.2071L12 10.9142L7.70711 15.2071C7.31658 15.5976 6.68342 15.5976 6.29289 15.2071C5.90237 14.8166 5.90237 14.1834 6.29289 13.7929L11.2929 8.79289Z"
											fill="rgb(var(--dark-gray))"></path>
									</g>
								</svg>

								<svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<g id="SVGRepo_bgCarrier" stroke-width="0"></g>
									<g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
									<g id="SVGRepo_iconCarrier">
										<path fill-rule="evenodd" clip-rule="evenodd"
											d="M6.29289 8.79289C6.68342 8.40237 7.31658 8.40237 7.70711 8.79289L12 13.0858L16.2929 8.79289C16.6834 8.40237 17.3166 8.40237 17.7071 8.79289C18.0976 9.18342 18.0976 9.81658 17.7071 10.2071L12.7071 15.2071C12.3166 15.5976 11.6834 15.5976 11.2929 15.2071L6.29289 10.2071C5.90237 9.81658 5.90237 9.18342 6.29289 8.79289Z"
											fill="rgb(var(--dark-gray))"></path>
									</g>
								</svg>
							</div>
						</button>

						<div>
							<ul class="tasks">
								<li class="task">
									<div style="--progress: 0">
										<div></div>
									</div>

									<span>Debugging</span>
								</li>
								<li class="task">
									<div style="--progress: 50">
										<div></div>
									</div>

									<span>Coding</span>
								</li>
								<li class="task">
									<div style="--progress: 100">
										<div></div>
									</div>

									<span>Design</span>
								</li>
							</ul>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	<main>
		<div class="main__header">
			<div class="breadcrumb">
				<button onclick="openMenu()">
					<svg width="16" height="16" version="1.1" fill="#000000" viewBox="0 -0.5 21 21"
						xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
						<g id="SVGRepo_bgCarrier" stroke-width="0"></g>
						<g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
						<g id="SVGRepo_iconCarrier">
							<defs></defs>
							<g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
								<g id="Dribbble-Light-Preview" transform="translate(-139.000000, -200.000000)"
									fill="rgb(var(--primary))">
									<g id="icons" transform="translate(56.000000, 160.000000)">
										<path style="stroke: none !important"
											d="M101.9,57.009 C101.9,57.56 101.38235,58 100.80275,58 L97.65275,58 C97.0742,58 96.65,57.56 96.65,57.009 L96.65,54.009 C96.65,53.458 97.0742,53 97.65275,53 L100.80275,53 C101.38235,53 101.9,53.458 101.9,54.009 L101.9,57.009 Z M100.80275,51 L97.65275,51 C95.9129,51 94.55,52.352 94.55,54.009 L94.55,57.009 C94.55,58.666 95.9129,60 97.65275,60 L100.80275,60 C102.5426,60 104,58.666 104,57.009 L104,54.009 C104,52.352 102.5426,51 100.80275,51 L100.80275,51 Z M90.35,57.009 C90.35,57.56 89.83235,58 89.25275,58 L86.10275,58 C85.5242,58 85.1,57.56 85.1,57.009 L85.1,54.009 C85.1,53.458 85.5242,53 86.10275,53 L89.25275,53 C89.83235,53 90.35,53.458 90.35,54.009 L90.35,57.009 Z M89.25275,51 L86.10275,51 C84.3629,51 83,52.352 83,54.009 L83,57.009 C83,58.666 84.3629,60 86.10275,60 L89.25275,60 C90.9926,60 92.45,58.666 92.45,57.009 L92.45,54.009 C92.45,52.352 90.9926,51 89.25275,51 L89.25275,51 Z M101.9,46.009 C101.9,46.56 101.38235,47 100.80275,47 L97.65275,47 C97.0742,47 96.65,46.56 96.65,46.009 L96.65,43.009 C96.65,42.458 97.0742,42 97.65275,42 L100.80275,42 C101.38235,42 101.9,42.458 101.9,43.009 L101.9,46.009 Z M100.80275,40 L97.65275,40 C95.9129,40 94.55,41.352 94.55,43.009 L94.55,46.009 C94.55,47.666 95.9129,49 97.65275,49 L100.80275,49 C102.5426,49 104,47.666 104,46.009 L104,43.009 C104,41.352 102.5426,40 100.80275,40 L100.80275,40 Z M90.35,46.009 C90.35,46.56 89.83235,47 89.25275,47 L86.10275,47 C85.5242,47 85.1,46.56 85.1,46.009 L85.1,43.009 C85.1,42.458 85.5242,42 86.10275,42 L89.25275,42 C89.83235,42 90.35,42.458 90.35,43.009 L90.35,46.009 Z M89.25275,40 L86.10275,40 C84.3629,40 83,41.352 83,43.009 L83,46.009 C83,47.666 84.3629,49 86.10275,49 L89.25275,49 C90.9926,49 92.45,47.666 92.45,46.009 L92.45,43.009 C92.45,41.352 90.9926,40 89.25275,40 L89.25275,40 Z"
											id="menu_navigation_grid-[#1528]"></path>
									</g>
								</g>
							</g>
						</g>
					</svg>
				</button>

				<span>General</span>

				<svg width="16" height="16" fill="none" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
					<g id="SVGRepo_bgCarrier" stroke-width="0"></g>
					<g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
					<g id="SVGRepo_iconCarrier">
						<g id="Arrow / Caret_Right_SM">
							<path id="Vector" d="M11 9L14 12L11 15" stroke="rgb(var(--dark-gray))" stroke-width="2"
								stroke-linecap="round" stroke-linejoin="round"></path>
						</g>
					</g>
				</svg>

				<span>Todo</span>
			</div>

			<h1>Todo</h1>

			<hr />
		</div>

		<div class="main__content">
			<div class="tab__header">
				<div class="tab__title">
					<h2>Monday, 22 April</h2>

					<div class="tab__actions">
						<button class="action__dropdown">
							<svg width="16" height="16" fill="none" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
								<g id="SVGRepo_bgCarrier" stroke-width="0"></g>
								<g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
								<g id="SVGRepo_iconCarrier">
									<path
										d="M11 8C11 7.44772 11.4477 7 12 7C12.5523 7 13 7.44772 13 8V11H16C16.5523 11 17 11.4477 17 12C17 12.5523 16.5523 13 16 13H13V16C13 16.5523 12.5523 17 12 17C11.4477 17 11 16.5523 11 16V13H8C7.44771 13 7 12.5523 7 12C7 11.4477 7.44772 11 8 11H11V8Z"
										fill="rgb(var(--white))"></path>
									<path fill-rule="evenodd" clip-rule="evenodd"
										d="M23 12C23 18.0751 18.0751 23 12 23C5.92487 23 1 18.0751 1 12C1 5.92487 5.92487 1 12 1C18.0751 1 23 5.92487 23 12ZM3.00683 12C3.00683 16.9668 7.03321 20.9932 12 20.9932C16.9668 20.9932 20.9932 16.9668 20.9932 12C20.9932 7.03321 16.9668 3.00683 12 3.00683C7.03321 3.00683 3.00683 7.03321 3.00683 12Z"
										fill="rgb(var(--white))"></path>
								</g>
							</svg>

							<span>New</span>

							<svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
								<g id="SVGRepo_bgCarrier" stroke-width="0"></g>
								<g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
								<g id="SVGRepo_iconCarrier">
									<g id="Arrow / Caret_Down_SM">
										<path id="Vector" d="M15 11L12 14L9 11" stroke="rgb(var(--white))" stroke-width="2"
											stroke-linecap="round" stroke-linejoin="round"></path>
									</g>
								</g>
							</svg>
						</button>
					</div>
				</div>

				<ul class="tab__links">
					<li data-state="active" class="tab__link"><button>List</button></li>

					<li data-state="" class="tab__link"><button>Timeline</button></li>

					<li data-state="" class="tab__link"><button>Calendar</button></li>
				</ul>
			</div>

			<div class="tab__contents">
				<div class="todo__list">
					<div id="trip-plan-2024" data-state="open" class="todo__wrapper">
						<button>
							<div class="todo__title">
								<input type="checkbox" name="trip-plan-2024" />

								<span>Trip Plan 2024</span>
							</div>

							<div class="control__icon">
								<svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<g id="SVGRepo_bgCarrier" stroke-width="0"></g>
									<g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
									<g id="SVGRepo_iconCarrier">
										<path fill-rule="evenodd" clip-rule="evenodd"
											d="M11.2929 8.79289C11.6834 8.40237 12.3166 8.40237 12.7071 8.79289L17.7071 13.7929C18.0976 14.1834 18.0976 14.8166 17.7071 15.2071C17.3166 15.5976 16.6834 15.5976 16.2929 15.2071L12 10.9142L7.70711 15.2071C7.31658 15.5976 6.68342 15.5976 6.29289 15.2071C5.90237 14.8166 5.90237 14.1834 6.29289 13.7929L11.2929 8.79289Z"
											fill="rgb(var(--dark-gray))"></path>
									</g>
								</svg>

								<svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<g id="SVGRepo_bgCarrier" stroke-width="0"></g>
									<g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
									<g id="SVGRepo_iconCarrier">
										<path fill-rule="evenodd" clip-rule="evenodd"
											d="M6.29289 8.79289C6.68342 8.40237 7.31658 8.40237 7.70711 8.79289L12 13.0858L16.2929 8.79289C16.6834 8.40237 17.3166 8.40237 17.7071 8.79289C18.0976 9.18342 18.0976 9.81658 17.7071 10.2071L12.7071 15.2071C12.3166 15.5976 11.6834 15.5976 11.2929 15.2071L6.29289 10.2071C5.90237 9.81658 5.90237 9.18342 6.29289 8.79289Z"
											fill="rgb(var(--dark-gray))"></path>
									</g>
								</svg>
							</div>
						</button>

						<div class="todo__content">
							<div class="todo__content__wrapper">
								<button onclick="openTaskDetails('first-plan')" id="first-plan" data-state="closed" class="todo__item">
									<input type="checkbox" name="first-plan" />

									<div class="item__info">
										<h3>First Plan</h3>

										<div class="info__piece">
											<div class="item__date">
												<svg fill="none" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
													<g id="SVGRepo_bgCarrier" stroke-width="0"></g>
													<g stroke-linecap="round" stroke-linejoin="round" id="SVGRepo_tracerCarrier"></g>
													<g id="SVGRepo_iconCarrier">
														<path stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
															stroke="rgb(var(--dark-gray))"
															d="M3 9H21M7 3V5M17 3V5M6 13H8M6 17H8M11 13H13M11 17H13M16 13H18M16 17H18M6.2 21H17.8C18.9201 21 19.4802 21 19.908 20.782C20.2843 20.5903 20.5903 20.2843 20.782 19.908C21 19.4802 21 18.9201 21 17.8V8.2C21 7.07989 21 6.51984 20.782 6.09202C20.5903 5.71569 20.2843 5.40973 19.908 5.21799C19.4802 5 18.9201 5 17.8 5H6.2C5.0799 5 4.51984 5 4.09202 5.21799C3.71569 5.40973 3.40973 5.71569 3.21799 6.09202C3 6.51984 3 7.07989 3 8.2V17.8C3 18.9201 3 19.4802 3.21799 19.908C3.40973 20.2843 3.71569 20.5903 4.09202 20.782C4.51984 21 5.07989 21 6.2 21Z">
														</path>
													</g>
												</svg>

												<span>22 Jan 2024</span>
											</div>
										</div>

										<span style="--color: 255 140 0" class="item__label">Plan</span>
									</div>
								</button>

								<button onclick="openTaskDetails('relaxation')" id="relaxation" data-state="closed" class="todo__item">
									<input type="checkbox" name="relaxation" />

									<div class="item__info">
										<h3>Relaxation</h3>

										<div class="info__piece">
											<div class="item__date">
												<svg fill="none" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
													<g id="SVGRepo_bgCarrier" stroke-width="0"></g>
													<g stroke-linecap="round" stroke-linejoin="round" id="SVGRepo_tracerCarrier"></g>
													<g id="SVGRepo_iconCarrier">
														<path stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
															stroke="rgb(var(--dark-gray))"
															d="M3 9H21M7 3V5M17 3V5M6 13H8M6 17H8M11 13H13M11 17H13M16 13H18M16 17H18M6.2 21H17.8C18.9201 21 19.4802 21 19.908 20.782C20.2843 20.5903 20.5903 20.2843 20.782 19.908C21 19.4802 21 18.9201 21 17.8V8.2C21 7.07989 21 6.51984 20.782 6.09202C20.5903 5.71569 20.2843 5.40973 19.908 5.21799C19.4802 5 18.9201 5 17.8 5H6.2C5.0799 5 4.51984 5 4.09202 5.21799C3.71569 5.40973 3.40973 5.71569 3.21799 6.09202C3 6.51984 3 7.07989 3 8.2V17.8C3 18.9201 3 19.4802 3.21799 19.908C3.40973 20.2843 3.71569 20.5903 4.09202 20.782C4.51984 21 5.07989 21 6.2 21Z">
														</path>
													</g>
												</svg>

												<span>22 Jan 2024</span>
											</div>
										</div>

										<span style="--color: 47 79 79" class="item__label">Break</span>
									</div>
								</button>
							</div>
						</div>
					</div>

					<div data-state="collapsed" class="todo__wrapper">
						<button>
							<div class="todo__title">
								<input type="checkbox" name="development-practice" id="development-practice" />

								<span>Development Practice</span>
							</div>

							<div class="control__icon">
								<svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<g id="SVGRepo_bgCarrier" stroke-width="0"></g>
									<g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
									<g id="SVGRepo_iconCarrier">
										<path fill-rule="evenodd" clip-rule="evenodd"
											d="M11.2929 8.79289C11.6834 8.40237 12.3166 8.40237 12.7071 8.79289L17.7071 13.7929C18.0976 14.1834 18.0976 14.8166 17.7071 15.2071C17.3166 15.5976 16.6834 15.5976 16.2929 15.2071L12 10.9142L7.70711 15.2071C7.31658 15.5976 6.68342 15.5976 6.29289 15.2071C5.90237 14.8166 5.90237 14.1834 6.29289 13.7929L11.2929 8.79289Z"
											fill="rgb(var(--dark-gray))"></path>
									</g>
								</svg>

								<svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<g id="SVGRepo_bgCarrier" stroke-width="0"></g>
									<g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
									<g id="SVGRepo_iconCarrier">
										<path fill-rule="evenodd" clip-rule="evenodd"
											d="M6.29289 8.79289C6.68342 8.40237 7.31658 8.40237 7.70711 8.79289L12 13.0858L16.2929 8.79289C16.6834 8.40237 17.3166 8.40237 17.7071 8.79289C18.0976 9.18342 18.0976 9.81658 17.7071 10.2071L12.7071 15.2071C12.3166 15.5976 11.6834 15.5976 11.2929 15.2071L6.29289 10.2071C5.90237 9.81658 5.90237 9.18342 6.29289 8.79289Z"
											fill="rgb(var(--dark-gray))"></path>
									</g>
								</svg>
							</div>
						</button>
					</div>
				</div>
			</div>
		</div>
	</main>

	<aside id="aside" data-state="closed">
		<div class="todo__description__con">
			<div class="description__header">
				<h1>Task Details</h1>

				<button onclick="closeTaskDetails()">
					<svg viewBox="0 0 24 24" fill="none" width="20" height="20" xmlns="http://www.w3.org/2000/svg">
						<g id="SVGRepo_bgCarrier" stroke-width="0"></g>
						<g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
						<g id="SVGRepo_iconCarrier">
							<g id="Menu / Close_MD">
								<path id="Vector" d="M18 18L12 12M12 12L6 6M12 12L18 6M12 12L6 18" stroke="rgb(var(--secondary))"
									stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
							</g>
						</g>
					</svg>
				</button>
			</div>

			<div class="description__wrapper">
				<span>My Task</span>

				<div class="description__content">
					<div class="description__detail">
						<h2>First Plan</h2>

						<p>
							Lorem ipsum dolor sit, amet consectetur adipisicing elit. A
							eveniet earum suscipit! Asperiores, quibusdam iusto, ipsa quia
							mollitia rem distinctio labore magni unde qui accusamus sed
							quaerat reiciendis non? Quis?
						</p>
					</div>

					<div class="description__features">
						<div class="feature">
							<span>Timeline</span>

							<p>22 April 2024</p>
						</div>

						<div class="feature">
							<span>Time</span>

							<p>09:30</p>
						</div>

						<div class="feature">
							<span>Label</span>

							<p>Plan</p>
						</div>
					</div>

					<div class="sub__list__wrapper">
						<div class="sub__list__title">
							<svg viewBox="0 0 24 24" fill="none" width="16" height="16" xmlns="http://www.w3.org/2000/svg">
								<g id="SVGRepo_bgCarrier" stroke-width="0"></g>
								<g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
								<g id="SVGRepo_iconCarrier">
									<path
										d="M11 6L21 6.00072M11 12L21 12.0007M11 18L21 18.0007M3 11.9444L4.53846 13.5L8 10M3 5.94444L4.53846 7.5L8 4M4.5 18H4.51M5 18C5 18.2761 4.77614 18.5 4.5 18.5C4.22386 18.5 4 18.2761 4 18C4 17.7239 4.22386 17.5 4.5 17.5C4.77614 17.5 5 17.7239 5 18Z"
										stroke="rgb(var(--dark-gray))" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
									</path>
								</g>
							</svg>

							<h3>Sub List</h3>
						</div>

						<ul class="sub__list">
							<li data-state="done" class="sub__list__item">
								Research on travel areas
							</li>

							<li data-state="" class="sub__list__item">
								Research on lodging areas
							</li>

							<li data-state="" class="sub__list__item">
								Arrange travel reservations
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</aside>

	<script src="script.js"></script>
</body>

</html>