<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Part one|Answers</title>
</head>
<body>

	<p><u>DATA ENCAPSULATION</u> <br>

		Encapsulation and Decapsulation are two terms related to the transmission of data through each layer. <br>
		Encapsulation is the process of adding information to the data in the application layer when it is sent through each layer of the model. Each time data crosses a layer, a new protocol data unit (PDU) is created. </p>

		<p>Data sent from the application layer added a header with information about TCP/UDP in the transport layer and the data is called a segment. When this segment reaches the internet layer, a header with IP addresses is added. Now its called a package. When the packet reaches the network access layer, a header with MAC addresses is added. Likewise, in each layer, a protocol data unit (PDU) is created. The adding this information to each layer is called Encapsulation. Once the encapsulation process is complete, the frame is sent to the network.</p>

		<p>Layer 4,3,2 and 1 are also called data flow layers because they are related to the flow of data while 5,6 and 7 are related to user interface</p>

		<p>At the application layer, presentation and session layer, information is presented in the form of Data, this Data has a new format in the transport, network and data link layers as Segments, packets and Frames respectively. And finally at the physical layer, Frames are become Bits</p>

	</p>



	<p><u>De-Encapsulation</u> <br>

		The Frame leaves the host computer to the network. The it reaches the destination host. In the destination host, the frame is decapsulated in reverse order to the application layer. The frame that reaches the network access layer contains the data, the TCP/UDP header, the header with IP addresses and the header with MAC addresses.
	</p>

	<p>When sent to the network layer, it is a packet containing data, a TCP/UDP header and header with an IP address. Then the package reaches the transport layer. Now it is segmented and contains data and a TCP/UDP header. Finally, the segment reaches the application layer. the segment reaches the application layer. In the application layer, the hos can see the data sent from the source computer. This process is called decapsulation</p>

</body>
</html>