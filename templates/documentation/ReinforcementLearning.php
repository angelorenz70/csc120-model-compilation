{% extends 'documentation/base.php' %}

{% block content %}
        <!-- Masthead-->
        <header class="masthead text-light" style="background-image: url('{{url_for('static', filename='assets/image_docs/img_obstacle/obstacle4.jpeg')}}'); background-repeat: no-repeat; background-size: cover;">
            <div class="container">
                <div class="masthead-subheading">REINFORCEMENT LEARNING</div>
                <div class="masthead-heading text-uppercase">APPLICATION: AVOID OBSTACLE</div>
            </div>
        </header>
        <!-- Explanation-->
        <section class="page-section text-light" id="about">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Advancing Intelligent Navigation</h2>
                    <h3 class="section-subheading  ">Reinforcement learning is an effective approach to train agents in intelligently avoiding obstacles. 
                        By defining appropriate representations of the agent's environment, designing a suitable set of actions, and creating a rewarding 
                        system, RL algorithms can learn effective obstacle avoidance strategies. Evaluating the performance of these agents using metrics 
                        such as success rate, collision rate, efficiency, smoothness, and generalization provides valuable insights into their capabilities. 
                        This information helps guide further improvements in RL-based obstacle avoidance applications.</h3>
                </div>
                <ul class="timeline">
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="{{url_for('static', filename='assets/image_docs/img_obstacle/obstacle5.png')}}" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>Applications</h4>
                            </div>
                            <div class="timeline-body"><p class=" ">Reinforcement learning applied to obstacle avoidance finds practical applications in various domains, such as robotics,
                                 autonomous vehicles, and virtual simulations. Through training agents using reinforcement learning techniques, it enables them to navigate intricate 
                                 environments and effectively steer clear of obstacles. This approach not only enhances safety but also empowers agents to make intelligent decisions, 
                                 ensuring efficient obstacle avoidance in dynamic and complex settings.</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="{{url_for('static', filename='assets/image_docs/img_obstacle/obstacle7.png')}}" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>Action Space</h4>
                            </div>
                            <div class="timeline-body"><p class=" ">A continuous action space allows agents to make smooth and precise adjustments, offering fine-grained control over their actions. It enables them to navigate complex environments effectively but requires specialized techniques to handle the challenges of exploration and exploitation within an infinite range of possible actions.</p></div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="{{url_for('static', filename='assets/image_docs/img_obstacle/obstacle8.png')}}" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>Observation Space</h4>
                            </div>
                            <div class="timeline-body"><p class=" ">Consists of the positions of the agent, the position of the coin, and the position of the obstacle in the environment. It provides information about the spatial coordinates of these entities, allowing the agent to perceive their locations relative to each other. Additionally, the distance between the agent and the coin is included in the observation space, offering a measure of proximity that helps the agent make informed decisions based on the relative distances between itself, the coin, and any obstacles present in the environment.</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="{{url_for('static', filename='assets/image_docs/img_obstacle/obstacle9.png')}}" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>PPO Policy</h4>
                            </div>
                            <div class="timeline-body"><p class=" ">In the Proximal Policy Optimization (PPO) algorithm, the observation space is designed to include the positions of the agent, the coin, and the obstacles present in the environment. This information plays a critical role in helping the agent understand their spatial relationships. Moreover, the observation space also takes into account the distance between the agent and the coin, which serves as a valuable measure of proximity. By considering these relative distances, the agent can make informed decisions to navigate the environment effectively, avoid obstacles, and reach the coin.</p></div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="{{url_for('static', filename='assets/image_docs/img_obstacle/obstacle10.png')}}" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>Reward</h4>
                            </div>
                            <div class="timeline-body"><p class=" ">Serve as feedback to the agent, guiding it towards learning optimal behaviors. 
                                Positive rewards reinforce desirable actions, while negative rewards discourage undesired actions, allowing the agent 
                                to learn and improve its decision-making abilities over time.</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image">
                            <h4>
                                End
                                <br />
                                Of 
                                <br />
                                Discussion.
                            </h4>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <!-- Portfolio Grid-->
        <section class="page-section bg-light" id="portfolio" 
        style="background: rgb(63,94,251); background: radial-gradient(circle, rgba(192, 192, 192) 0%, rgba(0, 53, 128) 100%);">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">GRAPHS</h2>
                    <h3 class="section-subheading  ">Look at this graphs to know the metrics and evaluation of the model.</h3>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 1-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1">
                                <div class="portfolio-caption">
                                    <div class="portfolio-caption-heading">Hyperparameters</div>
                                    <div class="portfolio-caption-subheading  ">Graph 1</div>
                                </div>
                            </a>
                            
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 2-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal2">
                                <div class="portfolio-caption">
                                    <div class="portfolio-caption-heading">Neural Network Model</div>
                                    <div class="portfolio-caption-subheading  ">Graph 2</div>
                                </div>
                            </a>
                            
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 3-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal3">
                                <div class="portfolio-caption">
                                    <div class="portfolio-caption-heading">Trainer Configuration</div>
                                    <div class="portfolio-caption-subheading  ">Graph 3</div>
                                </div>
                            </a>
                            
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                        <!-- Portfolio item 4-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal4">
                                <div class="portfolio-caption">
                                    <div class="portfolio-caption-heading">Reward</div>
                                    <div class="portfolio-caption-subheading  ">Graph 4</div>
                                </div>
                            </a>
                            
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
                        <!-- Portfolio item 5-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal5">
                                <div class="portfolio-caption">
                                    <div class="portfolio-caption-heading">Environment</div>
                                    <div class="portfolio-caption-subheading  ">Graph 5-7</div>
                                </div>
                            </a>
                           
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <!-- Portfolio item 6-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal6">
                                <div class="portfolio-caption">
                                    <div class="portfolio-caption-heading">Losses</div>
                                    <div class="portfolio-caption-subheading  ">Graph 8-11</div>
                                </div>
                            </a>
                           
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Portfolio Modals-->
        <!-- Portfolio item 1 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Hyperparameters</h2>
                                    <img class="img-fluid d-block mx-auto" src="{{url_for('static', filename='assets/image_docs/img_obstacle/rl docs/hyperparameters.png')}}" alt="..." />
                                    <p>The batch size determines the number of samples the model processes at once, with a value of 1024. The buffer size is the capacity for storing data samples, set at 10240. The learning rate, or the step size in updating the model, is 3.0e-4, and it follows a linear schedule. <br> For the Proximal Policy Optimization (PPO) algorithm, the beta value is 3.0e-3, which controls the strength of the policy change. The beta schedule is constant, meaning it remains the same throughout training. The epsilon value is 0.2, representing the clipping parameter to limit policy changes, and it follows a linear schedule. The lambda value is 0.95, determining the weight between old and new policy updates. The model goes through 3 epochs of training, and it does not have a shared critic network for value estimation.</p>
                                    <p>The batch size determines the number of samples the model processes at once, with a value of 1024. The buffer size is the capacity for storing data samples, set at 10240. The learning rate, or the step size in updating the model, is 3.0e-4, and it follows a linear schedule. <br> For the Proximal Policy Optimization (PPO) algorithm, the beta value is 3.0e-3, which controls the strength of the policy change. The beta schedule is constant, meaning it remains the same throughout training. The epsilon value is 0.2, representing the clipping parameter to limit policy changes, and it follows a linear schedule. The lambda value is 0.95, determining the weight between old and new policy updates. The model goes through 3 epochs of training, and it does not have a shared critic network for value estimation.</p>

                                    <ul class="list-inline">
                                        <li>
                                            <strong>Graph 1</strong>
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Close
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 2 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Neural Network Model</h2>
                                    <img class="img-fluid d-block mx-auto" src="{{url_for('static', filename='assets/image_docs/img_obstacle/rl docs/network.png')}}" alt="..." />
                                    <p>This configuration specifies the settings for a neural network. It uses a simple encoding method for visual input and does not normalize the data. The network has four layers with 128 hidden units each. Additionally, the memory component of the network has a sequence length of 64 and a memory size of 256.</p>
                                    <p>This configuration specifies the settings for a neural network. It uses a simple encoding method for visual input and does not normalize the data. The network has four layers with 128 hidden units each. Additionally, the memory component of the network has a sequence length of 64 and a memory size of 256.</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Graph 2</strong>
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Close
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 3 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Trainer Configuration</h2>
                                    <img class="img-fluid d-block mx-auto" src="{{url_for('static', filename='assets/image_docs/img_obstacle/rl docs/Trainer Configuration Common to all trainers.png')}}" alt="..." />
                                    <p>These settings pertain to a specific system or program. They define various parameters and configurations. The purpose of these settings is to control aspects such as the maximum number of steps, time horizon, frequency of generating summaries, checkpoint management, threading behavior, and initialization path for the system or program.</p>
                                    <p>These settings pertain to a specific system or program. They define various parameters and configurations. The purpose of these settings is to control aspects such as the maximum number of steps, time horizon, frequency of generating summaries, checkpoint management, threading behavior, and initialization path for the system or program.</p>

                                    <ul class="list-inline">
                                        <li>
                                            <strong>Graph 3</strong>
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Close
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


                <!-- Portfolio item 4 modal popup-->
                <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Reward</h2>
                                    <img class="img-fluid d-block mx-auto" src="{{url_for('static', filename='assets/image_docs/img_obstacle/rl docs/reward.png')}}" alt="..." />
                                    <p>Agents are given rewards based on their performance or outcomes. These rewards serve as a way to incentivize and reinforce certain behaviors. When an agent successfully reaches a coin, it receives a positive reward of 3, indicating a desirable achievement. On the other hand, if the agent collides with obstacles, it incurs a negative reward of 1, indicating an undesired outcome. By assigning these rewards, the system aims to guide the agents towards maximizing their overall success while avoiding obstacles.</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Graph 4</strong>
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Close
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 5 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Environment</h2>
                                    <img class="img-fluid d-block mx-auto" src="{{url_for('static', filename='assets/image_docs/img_obstacle/rl docs/Environment_Cumulative Reward hist.png')}}" alt="..." />
                                    <p>In reinforcement learning, cumulative rewards represent the total sum of rewards an agent receives as it interacts with its environment. These rewards are given to the agent based on its performance after each action. The agent's objective is to learn the best strategy or policy to maximize its cumulative reward by making smart choices during its interactions with the environment.</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Graph 5</strong>
                                        </li>
                                    </ul>
                                    <img class="img-fluid d-block mx-auto" src="{{url_for('static', filename='assets/image_docs/img_obstacle/rl docs/Environment_Cumulative Reward.png')}}" alt="..." />
                                    <p>The cumulative reward history is like a log that keeps track of all the rewards an agent has earned while interacting with its environment. It provides a historical record of the agent's performance, showing how it has been doing over time or across multiple episodes. This record is useful for analyzing the agent's learning progress, comparing different algorithms, and evaluating the effectiveness of its decision-making strategies.</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Graph 6</strong>
                                        </li>
                                    </ul>
                                    <img class="img-fluid d-block mx-auto" src="{{url_for('static', filename='assets/image_docs/img_obstacle/rl docs/Environment_Episode Length.png')}}" alt="..." />
                                    <p>In reinforcement learning, an episode is a full cycle of interaction between an agent and its environment. It begins with the initial state, and the agent takes actions according to its policy, receiving rewards and transitioning to new states until it reaches a terminal state. The episode length is the number of steps or actions the agent takes within a single episode, representing how long the episode lasts and can vary depending on the specific task or environment.</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Graph 7</strong>
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Close
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 6 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Losses</h2>
                                    <img class="img-fluid d-block mx-auto" src="{{url_for('static', filename='assets/image_docs/img_obstacle/rl docs/Losses_GAIL Loss.png')}}" alt="..." />
                                    <p>GAIL is an algorithm that learns from expert demonstrations and uses a combination of generator and discriminator networks. The generator network tries to imitate the expert's behavior by generating actions, while the discriminator network predicts whether the actions are from the expert or the generator. The generator improves by minimizing the loss that measures the difference between the generator's actions and the expert's actions predicted by the discriminator.</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Graph 8</strong>
                                        </li>
                                    </ul>
                                    <img class="img-fluid d-block mx-auto" src="{{url_for('static', filename='assets/image_docs/img_obstacle/rl docs/Losses_Policy Loss.png')}}" alt="..." />
                                    <p>In reinforcement learning, a policy represents how an agent makes decisions. The policy loss helps update the policy network by measuring the disparity between the actions predicted by the policy and the actions that would yield the highest expected rewards. Minimizing the policy loss allows the policy to progressively enhance its decision-making abilities and make more advantageous choices.</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Graph 9</strong>
                                        </li>
                                    </ul>
                                    <img class="img-fluid d-block mx-auto" src="{{url_for('static', filename='assets/image_docs/img_obstacle/rl docs/Losses_Pretraining Loss.png')}}" alt="..." />
                                    <p>Pretraining is a common technique in deep learning where a neural network's parameters are initialized before further fine-tuning. The pretraining loss refers to the loss function used during this initial phase, which depends on the network's architecture and objective. For instance, in language models, the pretraining loss may involve predicting missing words or forecasting the next word in a sentence based on the preceding words.</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Graph 10</strong>
                                        </li>
                                    </ul>
                                    <img class="img-fluid d-block mx-auto" src="{{url_for('static', filename='assets/image_docs/img_obstacle/rl docs/Losses_Value Loss.png')}}" alt="..." />
                                    <p>Value loss is frequently used in reinforcement learning algorithms like Q-learning that focus on estimating values. It quantifies the difference between predicted values, such as state-action values or state values, and the target values derived from the Bellman equation. Minimizing the value loss helps the agent refine its value estimates, leading to more accurate approximations of true values and ultimately enhancing decision-making in reinforcement learning tasks.</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Graph 11</strong>
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Close
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
{% endblock %}
