document.addEventListener('DOMContentLoaded', function () {
    const tabs = document.querySelectorAll('.ai-nav-tab');
    const navTitle = document.querySelector('.nav-title');
    const navDescription = document.querySelector('.nav-description');
    const navPoints = document.querySelector('.nav-points');

    const contentMap = {
      'Artificial Intelligence': {
        title: 'Artificial Intelligence',
        description:
          "In today's fast-paced digital landscape, leveraging Artificial Intelligence isn't a luxury, it's a necessity. If you're not tapping into AI's full potential, chances are your competitors already are.",
        points: [
          'AI is no longer optional - it\'s essential for modern business success.',
          'Your competitors are likely already using AI to gain an edge.',
          'Suitable for startups, SMEs, and large enterprises alike.',
          'Drives operational efficiency and smarter decision-making.',
          'Seamlessly integrates into your existing tech infrastructure.',
          'Acts as a powerful extension of your current systems.',
          'Helps future-proof your business with scalable intelligence.',
          'Enables automation, insights, and innovation across functions.',
          'Fast-track digital transformation without rebuilding from scratch.',
          'Stay ahead of the curve with tailored AI solutions.',
        ],
      },
      'Blockchain': {
        title: 'Blockchain',
        description:
          'Empower your business with transparency, security, and decentralization. Blockchain is revolutionizing how industries handle data, transactions, and trust.',
        points: [
          'Enhances data transparency and traceability.',
          'Eliminates intermediaries, reducing costs and delays.',
          'Ensures secure and immutable transactions.',
          'Ideal for supply chain, finance, and identity systems.',
          'Supports smart contract automation.',
          'Increases customer and partner trust.',
          'Decentralized systems with enhanced control.',
          'Scalable for enterprise-grade applications.',
          'Reduces fraud and enhances accountability.',
          'Next-gen tech for digital trust and compliance.',
        ],
      },
      'Big Data': {
        title: 'Big Data',
        description:
          'Unlock the power of your data. Our Big Data solutions help you collect, process, and analyze vast volumes of information to uncover hidden patterns and actionable insights. Make data your most valuable asset.',
        points: [
          'Manage and process massive datasets with ease.',
          'Extract meaningful insights from complex data.',
          'Real-time analytics for smarter decisions.',
          'Improves operational efficiency.',
          'Supports machine learning and AI integration.',
          'Optimize customer experiences and retention.',
          'Drive revenue growth through data-driven strategies.',
          'Handle structured and unstructured data effectively.',
          'Scale effortlessly as your data grows.',
          'Make confident, informed business decisions.',
        ],
      },
      'Computer Vision': {
        title: 'Computer Vision',
        description:
          'Give your applications the power to see and interpret the world. Our computer vision systems enable real-time object recognition, facial analysis, scene understanding, and more-transforming industries like retail.',
        points: [
          'Real-time object and facial recognition.',
          'Enhance automation in surveillance and retail.',
          'Streamline operations with visual data analytics.',
          'Improve quality control in manufacturing.',
          'Enable AR experiences with environment tracking.',
          'Boost safety through intelligent monitoring.',
          'Optimize medical imaging diagnostics.',
          'Bridge digital and physical worlds with vision AI.',
          'Custom models for industry-specific needs.',
          'Transform cameras into smart data sensors.',
        ],
      },
      'Mixed Reality': {
        title: 'Mixed Reality',
        description:
          'Blend physical and digital experiences to create immersive environments for training, collaboration, and product visualization. Mixed Reality opens new dimensions in user interaction how we learn and engage.',
        points: [
          'Bridge the physical and digital worlds.',
          'Train employees in risk-free virtual environments.',
          'Enhance collaboration through spatial computing.',
          'Visualize products in real-world settings.',
          'Create immersive brand experiences.',
          'Increase engagement and retention through interactivity.',
          'Supports AR/VR hardware like HoloLens, Oculus, and more.',
          'Ideal for real estate, education, and healthcare.',
          'Custom simulations for enterprise applications.',
          'Drive innovation with interactive technology.',
        ],
      },
      'Internet of Things': {
        title: 'Internet of Things',
        description:
          'Connect devices, collect real-time data, and drive smart automation. Our IoT solutions give you the ability to monitor, analyze, and control your environment-making operations smarter and more efficient.',
        points: [
          'Connect devices to create a smart ecosystem.',
          'Monitor environments in real time.',
          'Automate processes and reduce manual intervention.',
          'Predict maintenance and reduce downtime.',
          'Enhance logistics and supply chain visibility.',
          'Improve energy efficiency and sustainability.',
          'Enable data-driven decision-making at the edge.',
          'Secure and scalable device management.',
          'Integrate with cloud and AI platforms.',
          'Ideal for smart homes, industries, and cities.',
        ],
      },
    };

    tabs.forEach(tab => {
      tab.addEventListener('click', function () {
        tabs.forEach(t => t.classList.remove('active'));
        tab.classList.add('active');

        const tabText = tab.textContent.trim();
        const content = contentMap[tabText];
        if (content) {
          navTitle.textContent = content.title;
          navDescription.textContent = content.description;
          navPoints.innerHTML = content.points.map(p => `<li>${p}</li>`).join('');
        }
      });
    });
  });